<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class ParseHotelPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:hotel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse hotel page from mirturizma46.ru and save structured data';

    public function handle(): int
    {
        $resort = $this->choice(
            'Выберите название курорта',
            [
                'Анапа', 'Геленджик', 'Кабардинка', 'Лермонтово', 'Новомихайловский', 'Дедеркой', 'Лазаревское', 'Адлер',
                'Приморский',
                'Береговое',
                'Феодосия',
                'Коктебель',
                'Курортное',
                'Судак',
                'Морское',
            ]
        );

        $direction = $this->choice(
            'Выберите направление',
            ['Курск - Анапа', 'Курск - Лазаревское', 'Курск - Крым']
        );

        $url = $this->ask('Введите URL страницы');

        if (! $url) {
            $this->error('URL должен быть заполнен.');

            return Command::FAILURE;
        }

        $this->info("Loading: {$url}");

        $response = Http::timeout(30)->get($url);
        if (! $response->successful()) {
            $this->error('Failed to fetch page.');

            return Command::FAILURE;
        }

        $crawler = new Crawler($response->body());

        $h1Node = $crawler->filter('h1');
        if ($h1Node->count() === 0) {
            $this->error('h1 not found.');

            return Command::FAILURE;
        }

        $h1Text = trim($h1Node->first()->text());
        $slugForDir = Str::slug($h1Text, '-');
        $slugForVar = Str::slug($h1Text, '_');

        if (empty($slugForDir)) {
            $this->error('Failed to build slug from h1.');

            return Command::FAILURE;
        }

        $resortDir = Str::slug($resort, '_');
        $basePath = base_path("database/seeders/hotels/{$resortDir}/{$slugForDir}");
        $imgPath = $basePath.'/img';

        $this->ensureDirectory($basePath);
        $this->ensureDirectory($imgPath);

        $baseHost = $this->resolveBaseHost($url);

        $images = $this->parseImages($crawler, $imgPath, $baseHost);
        $baseDescription = $this->parseBaseDescription($crawler);
        $numbers = $this->parseNumbers($crawler);
        $before5Price = $this->textOrEmpty($crawler, '#to_import_before_5_price');
        $before12Price = $this->textOrEmpty($crawler, '#to_import_before_12_price');
        $geo = $this->textOrEmpty($crawler, '#to_import_geo');

        $result = [
            'resort' => $resort,
            'direction' => $direction,
            'url' => $url,
            'slug' => $slugForDir,
            'title' => $h1Text,
            'images' => $images,
            'base_description' => $baseDescription,
            'numbers' => $numbers,
            'before_5_price' => $before5Price,
            'before_12_price' => $before12Price,
            'geo' => $geo,
        ];

        $this->writeResult($basePath.'/rez.php', $slugForVar, $result);

        $this->info("Done. Saved to {$basePath}/rez.php");

        return Command::SUCCESS;
    }

    private function parseImages(Crawler $crawler, string $imgPath, string $baseHost): array
    {
        $images = [];
        $crawler->filter('.slider-for-gallery a')->each(function (Crawler $node) use (&$images, $imgPath, $baseHost) {
            $href = $node->attr('href');

            if (empty($href)) {
                return;
            }

            $fullUrl = $this->resolveUrl($href, $baseHost);
            $fileName = $this->downloadImage($fullUrl, $imgPath);
            if (! empty($fileName)) {
                $images[] = $fileName;
            }
        });

        return $images;
    }

    private function parseBaseDescription(Crawler $crawler): array
    {
        $result = [];
        $crawler->filter('.baseDescr h3')->each(function (Crawler $h3) use (&$result) {
            $title = trim($h3->text(''));
            if ($title === '') {
                return;
            }

            $description = $this->followingText($h3->getNode(0));
            $result[] = [
                'title' => $title,
                'description' => $description,
            ];
        });

        return $result;
    }

    private function parseNumbers(Crawler $crawler): array
    {
        $scriptNode = $crawler->filter('#to_import_number script');
        if ($scriptNode->count() === 0) {
            return [];
        }

        $raw = trim($scriptNode->first()->text());
        $json = $this->extractJsonArray($raw);
        $decoded = json_decode($json, true);

        return is_array($decoded) ? $decoded : [];
    }

    private function textOrEmpty(Crawler $crawler, string $selector): string
    {
        $node = $crawler->filter($selector);

        return $node->count() > 0 ? trim($node->first()->text()) : '';
    }

    private function followingText(?\DOMNode $node): string
    {
        if (! $node) {
            return '';
        }

        $html = '';
        $current = $node->nextSibling;

        while ($current) {
            // Если встретили следующий h3 - останавливаемся
            if ($current instanceof \DOMElement && $current->nodeName === 'h3') {
                break;
            }

            // Собираем HTML с разметкой
            if ($current instanceof \DOMText) {
                $html .= $current->wholeText;
            } elseif ($current instanceof \DOMElement) {
                $html .= $current->ownerDocument->saveHTML($current);
            }

            $current = $current->nextSibling;
        }

        return trim($html);
    }

    private function extractJsonArray(string $content): string
    {
        $trimmed = trim($content);
        if (str_starts_with($trimmed, '[')) {
            return $trimmed;
        }

        if (preg_match('/(\[.*\])/s', $trimmed, $matches)) {
            return $matches[1];
        }

        return '[]';
    }

    private function downloadImage(string $url, string $directory): string
    {
        try {
            $name = pathinfo(parse_url($url, PHP_URL_PATH) ?? '', PATHINFO_FILENAME);
            $extension = pathinfo(parse_url($url, PHP_URL_PATH) ?? '', PATHINFO_EXTENSION);

            $safeName = Str::slug($name ?: uniqid('img'), '-');
            if ($safeName === '') {
                $safeName = uniqid('img');
            }

            $extension = $extension !== '' ? $extension : 'jpg';
            $fileName = $safeName.'.'.$extension;
            $filePath = $directory.'/'.$fileName;

            $counter = 1;
            while (File::exists($filePath)) {
                $fileName = $safeName.'-'.$counter.'.'.$extension;
                $filePath = $directory.'/'.$fileName;
                $counter++;
            }

            $response = Http::timeout(30)->get($url);
            if (! $response->successful()) {
                $this->error("Failed to download image: {$url}");

                return '';
            }

            File::put($filePath, $response->body());
            $this->line("Downloaded: {$fileName}");

            return $fileName;
        } catch (\Exception $e) {
            $this->error('Image download error: '.$e->getMessage());

            return '';
        }
    }

    private function ensureDirectory(string $path): void
    {
        if (! File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
    }

    private function resolveUrl(string $href, string $baseHost): string
    {
        if (str_starts_with($href, 'http')) {
            return $href;
        }

        if (str_starts_with($href, '//')) {
            return 'https:'.$href;
        }

        if (str_starts_with($href, '/')) {
            return rtrim($baseHost, '/').$href;
        }

        return rtrim($baseHost, '/').'/'.ltrim($href, '/');
    }

    private function resolveBaseHost(string $url): string
    {
        $parts = parse_url($url);
        if (! $parts || empty($parts['scheme']) || empty($parts['host'])) {
            return '';
        }

        $host = $parts['scheme'].'://'.$parts['host'];
        if (! empty($parts['port'])) {
            $host .= ':'.$parts['port'];
        }

        return $host;
    }

    private function writeResult(string $path, string $varName, array $data): void
    {
        $export = var_export($data, true);
        $content = "<?php\n\${$varName} = {$export};\n";
        File::put($path, $content);
    }
}
