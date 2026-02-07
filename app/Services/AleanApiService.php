<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AleanApiService
{
    protected string $baseUrl;

    protected string $apiKey;

    protected string $apiSecret;

    public function __construct()
    {
        $this->baseUrl = config('alean.base_url');
        $this->apiKey = config('alean.api_key');
        $this->apiSecret = config('alean.api_secret');
    }

    public function getCountries(): string
    {
        // dd($this->apiKey, $this->apiSecret, $this->baseUrl);
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl.'?action=GetCountries');

        return $response->body();
    }

    public function getResorts(): string
    {
        // dd($this->apiKey, $this->apiSecret, $this->baseUrl);
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl.'?action=GetResorts');

        return $response->body();
    }

    public function getTours(): string
    {
        // dd($this->apiKey, $this->apiSecret, $this->baseUrl);
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl,
                [
                    'action' => 'GetTours',
                    'countryId' => 1, // ID России
                    'resorts' => 18, // ID Анапы
                    'dateFrom' => '08.07.2026',
                    'dateTo' => '18.07.2026',
                    'adults' => 2,
                    'kids' => 0,
                    'nightsMin' => 1,
                    'nightsMax' => 30,
                    'count' => 1000,
                    'currencyCode' => 'RUB',
                ]
            );

        return $response->body();
    }
}
