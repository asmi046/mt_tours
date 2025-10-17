<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Symfony\Component\DomCrawler\Crawler;

class ParseSchoolTours extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:school-tours';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse school tours from mirturizma46.ru';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to parse school tours...');

        // URLs для парсинга
        $urls = [
            'https://www.mirturizma46.ru/shkolnye-tury/',
            'https://www.mirturizma46.ru/shkolnye-tury/page/2/',
        ];

        // Создаем директорию если её нет
        $imageDir = public_path('tour_info/school');
        if (!File::exists($imageDir)) {
            File::makeDirectory($imageDir, 0755, true);
        }

        $allTours = [];

        foreach ($urls as $url) {
            $this->info("Parsing: {$url}");

            try {
                // Загружаем страницу
                $response = Http::timeout(30)->get($url);

                if (!$response->successful()) {
                    $this->error("Failed to load: {$url}");
                    continue;
                }

                $html = $response->body();
                $crawler = new Crawler($html);

                // Ищем элементы с классом resort-item-inner-wraper
                $crawler->filter('.resort-item-inner-wraper')->each(function (Crawler $node) use (&$allTours, $imageDir) {
                    try {
                        $tourData = [];

                        // Получаем заголовок (h2)
                        $h2Node = $node->filter('h2');
                        $tourData['title'] = $h2Node->count() > 0 ? trim($h2Node->text()) : '';

                        // Получаем описание (.tourInfoInPage)
                        $descNode = $node->filter('.tourInfoInPage');
                        $tourData['description'] = $descNode->count() > 0 ? trim($descNode->text()) : '';

                        // Получаем изображение (.attachment-turImg)
                        $imgNode = $node->filter('.attachment-turImg');
                        if ($imgNode->count() > 0) {
                            $imgSrc = $imgNode->attr('src');

                            // Скачиваем изображение
                            $imageName = $this->downloadImage($imgSrc, $imageDir);
                            $tourData['img'] = $imageName;
                        } else {
                            $tourData['img'] = '';
                        }

                        if (!empty($tourData['title'])) {
                            $allTours[] = $tourData;
                            $this->line("✓ Parsed: {$tourData['title']}");
                        }

                    } catch (\Exception $e) {
                        $this->error("Error parsing item: " . $e->getMessage());
                    }
                });

            } catch (\Exception $e) {
                $this->error("Error loading page {$url}: " . $e->getMessage());
            }
        }

        // Сохраняем JSON
        $jsonPath = public_path('tour_info/school/list.json');
        File::put($jsonPath, json_encode($allTours, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $this->info("Parsing completed! Total tours: " . count($allTours));
        $this->info("JSON saved to: {$jsonPath}");

        return Command::SUCCESS;
    }

    /**
     * Скачать изображение и вернуть имя файла
     */
    private function downloadImage($url, $directory)
    {
        try {
            // Формируем полный URL если нужно
            if (!str_starts_with($url, 'http')) {
                $url = 'https://www.mirturizma46.ru' . $url;
            }

            // Получаем имя файла из URL
            $fileName = basename(parse_url($url, PHP_URL_PATH));

            // Если имя файла пустое, генерируем случайное
            if (empty($fileName) || !preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $fileName)) {
                $fileName = uniqid('tour_') . '.jpg';
            }

            $filePath = $directory . '/' . $fileName;

            // Скачиваем файл
            $imageContent = Http::timeout(30)->get($url)->body();
            File::put($filePath, $imageContent);

            $this->line("  → Downloaded: {$fileName}");

            return $fileName;

        } catch (\Exception $e) {
            $this->error("  → Failed to download image: " . $e->getMessage());
            return '';
        }
    }
}
