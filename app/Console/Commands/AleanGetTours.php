<?php

namespace App\Console\Commands;

use App\Services\AleanApiService;
use Illuminate\Console\Command;

class AleanGetTours extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alean:get-tours';

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
        try {
            $aleanService = new AleanApiService;
            $result = $aleanService->getTours();

            // Создаём директорию если её нет
            $directory = public_path('alean_data');
            if (! is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            // Сохраняем результат в JSON файл
            $filePath = $directory.'/currencyCode.json';
            file_put_contents($filePath, $result);

            $this->info('Tours saved to: '.$filePath);
        } catch (\Exception $e) {
            $this->error('Error: '.$e->getMessage());
        }
    }
}
