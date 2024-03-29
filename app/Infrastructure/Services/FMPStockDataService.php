<?php
namespace App\Infrastructure\Services;

use App\Domain\Companies\StockDataServiceInterface;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FMPStockDataService implements StockDataServiceInterface
{
    public function fetchStockData($symbol)
    {
        $secret = config('secret.fmpcloud_key');
        $url = 'https://fmpcloud.io/api/v3/quote/' . $symbol . '?apikey=' . $secret;
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }
    }
}
