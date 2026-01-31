<?php

namespace App\Console\Commands;

use App\Services\AleanApiService;
use Illuminate\Console\Command;

class AleanGetCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alean:get-countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get countries list from Alean API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $aleanService = new AleanApiService;
            $result = $aleanService->getCountries();

            $this->info('Countries from Alean API:');
            $this->line($result);
        } catch (\Exception $e) {
            $this->error('Error: '.$e->getMessage());
        }
    }
}
