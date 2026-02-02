<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeaPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $folder = database_path('seeders/tour_dey_count');
        $files = glob($folder.'/*.php');
        $all = [];

        foreach ($files as $file) {
            $contents = file_get_contents($file);
            if (! preg_match('/\$(\w+)\s*=\s*\[/', $contents, $m)) {
                continue;
            }

            $varName = $m[1];
            // require the file so the variable becomes available in local scope
            require $file;

            if (! isset($$varName) || ! is_array($$varName)) {
                continue;
            }

            foreach ($$varName as $entry) {
                $entry['sort_order'] = $entry['sort_order'] ?? 0;

                foreach (['june_day_count', 'july_day_count', 'august_day_count', 'september_day_count'] as $d) {
                    $val = $entry[$d] ?? '';
                    // extract digits — fallback to 0
                    $num = preg_replace('/[^0-9]/', '', (string) $val);
                    $entry[$d] = $num === '' ? 0 : (int) $num;
                }

                $entry['created_at'] = now();
                $entry['updated_at'] = now();

                $all[] = $entry;
            }

            unset($$varName);
        }

        if (! empty($all)) {
            DB::table('sea_prices')->insert($all);
        }
    }
}
