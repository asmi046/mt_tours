<?php

namespace App\Console\Commands;

use App\Models\AleanSeaHotel;
use App\Models\SeaResort;
use App\Services\AleanApiService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class AleanGetHotels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alean:get-hotels';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get unique hotels from Alean tours';

    /**
     * The timeout for the command in seconds.
     *
     * @var int|null
     */
    protected $timeout = 300;

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Увеличиваем лимит памяти для обработки изображений
        ini_set('memory_limit', '512M');

        try {
            $aleanService = new AleanApiService;
            // Проверяем, не пуста ли таблица alean_tours
            $count = DB::table('alean_tours')->count();
            if ($count === 0) {
                $this->error('Таблица alean_tours пуста. Сначала запустите alean:get-tours');

                return;
            }

            $this->info("Найдено {$count} туров в таблице alean_tours");

            // Выбираем hotelId и hotelCID, группируем по hotelId
            $hotels = DB::table('alean_tours')
                ->select('hotelId', 'hotelCID', 'resortId')
                ->distinct()
                ->orderBy('hotelId')
                ->get();

            $this->info('Найдено '.count($hotels).' уникальных отелей:');
            $this->newLine();

            // Выводим результат в виде таблицы
            // $this->table(
            //     ['Hotel ID', 'Hotel CID'],
            //     $hotels->map(fn ($hotel) => [
            //         $hotel->hotelId,
            //         $hotel->hotelCID,
            //     ])->toArray()
            // );

            foreach ($hotels as $hotel) {
                $resort = SeaResort::where('alean_id', $hotel->resortId)->first();

                if (! $resort) {
                    $this->warn("Пропуск отеля с hotelId: {$hotel->hotelId} (не найден курорт с alean_id: {$hotel->resortId})");

                    continue;
                }
                $this->info("Обработка отеля с hotelId: {$hotel->hotelId} (курорт: {$resort->title})");

                $hotel_description = $aleanService->getHotelDescription($hotel->hotelId);
                $alean_data = json_decode($hotel_description, true);
                AleanSeaHotel::updateOrCreate(
                    [
                        'CID' => $alean_data['CID'],
                    ],
                    $aleanService->getHotelStructuresDescription($alean_data, $resort->id, $resort->sea_destination_id, $resort->bus_schedule)
                );

                $this->info("Добавлен отель: {$hotel->hotelCID}");

                // Освобождаем память
                unset($hotel_description, $alean_data);
                gc_collect_cycles();
            }

        } catch (\Exception $e) {
            $this->error('Error: '.$e->getMessage());
        }
    }
}
