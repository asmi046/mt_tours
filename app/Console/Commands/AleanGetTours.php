<?php

namespace App\Console\Commands;

use App\Models\AleanTour;
use App\Models\SeaResort;
use App\Services\AleanApiService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class AleanGetTours extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alean:get-tours';

    /**
     * The timeout for the command in seconds.
     *
     * @var int|null
     */
    protected $timeout = 300;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get tours list from Alean API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $startTime = microtime(true);

        try {
            // Очищаем таблицу перед импортом
            DB::table('alean_tours')->truncate();

            $resorts = SeaResort::all();
            $aleanService = new AleanApiService;

            foreach ($resorts as $resort) {

                foreach ($resort->busSchedules as $busSchedule) {
                    $startDate = ru_date_to_current_year($busSchedule->start_date);
                    $this->info("Обработка курорта: {$resort->title} (Дата заезда: {$startDate})");
                    if (! $resort->alean_id) {
                        $this->warn("Пропуск курорта: {$resort->title} (нет Alean ID)");

                        continue;
                    }

                    $result = $aleanService->getTours($resort->alean_id, $startDate);

                    // Парсим JSON и берём массив "data"
                    $data = json_decode($result, true);

                    if (isset($data['data']) && is_array($data['data'])) {
                        // Добавляем туры в таблицу
                        foreach ($data['data'] as $tour) {
                            $this->info(json_encode($tour, JSON_UNESCAPED_UNICODE));

                            AleanTour::create($tour);
                        }
                        $this->info('Добавлено '.count($data['data'])." туров для курорта: {$resort->title}");
                    } else {
                        $this->warn("Нет данных для курорта: {$resort->title}");
                    }
                }

            }

            $endTime = microtime(true);
            $executionTime = round($endTime - $startTime, 2);

            $this->info('Туры загружены!');
            $this->info("Время выполнения: {$executionTime} секунд");
        } catch (\Exception $e) {
            $this->error('Ошибка: '.$e->getMessage());
        }
    }
}
