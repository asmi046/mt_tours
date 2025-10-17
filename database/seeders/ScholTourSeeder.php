<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ScholTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Очищаем таблицу перед заполнением
        DB::table('schol_tours')->truncate();

        // Читаем JSON файл
        $jsonPath = public_path('tour_info/school/list.json');

        if (!File::exists($jsonPath)) {
            $this->command->error("JSON file not found: {$jsonPath}");
            return;
        }

        $tours = json_decode(File::get($jsonPath), true);

        if (!$tours || !is_array($tours)) {
            $this->command->error("Invalid JSON format");
            return;
        }

        // Создаем директорию в storage если её нет
        if (!Storage::exists('schol')) {
            Storage::makeDirectory('schol');
        }

        $order = 1;
        foreach ($tours as $tour) {
            $imgFileName = null;

            // Копируем изображение в storage
            if (!empty($tour['img'])) {
                $sourcePath = public_path('tour_info/school/' . $tour['img']);

                if (File::exists($sourcePath)) {
                    $imgFileName = $tour['img'];
                    $destinationPath = 'schol/' . $imgFileName;

                    // Копируем файл в storage
                    Storage::disk('public')->put($destinationPath, File::get($sourcePath));

                    $this->command->info("Copied image: {$imgFileName}");
                }
            }

            // Вставляем запись в базу данных
            DB::table('schol_tours')->insert([
                'order' => $order,
                'img' => $destinationPath,
                'title' => $tour['title'] ?? '',
                'description' => $tour['description'] ?? '',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->command->line("Added tour: {$tour['title']}");
            $order++;
        }

        $this->command->info("Successfully seeded " . count($tours) . " school tours!");
    }
}
