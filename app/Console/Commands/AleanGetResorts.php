<?php

namespace App\Console\Commands;

use App\Services\AleanApiService;
use Illuminate\Console\Command;

class AleanGetResorts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alean:get-resorts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get resorts list from Alean API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $aleanService = new AleanApiService;
            $result = $aleanService->getResorts();

            $this->info('Resorts from Alean API:');
            $this->line($result);
        } catch (\Exception $e) {
            $this->error('Error: '.$e->getMessage());
        }
    }
}
