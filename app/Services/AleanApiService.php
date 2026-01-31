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
}
