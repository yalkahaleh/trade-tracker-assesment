<?php

namespace App\Application\Console\Commands;

use App\Domain\Stocks\StockData;
use App\Domain\Stocks\StockDataServiceInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdateStockData extends Command
{
    protected $signature = 'update:stockdata';
    protected $description = 'Update stock data from the API';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $symbols = ['AAPL', 'TSLA'];
        $i = 1;

        foreach ($symbols as $symbol) {
            $response = Http::get(url('/api/stock-data/' . $symbol));
            if ($response->successful()) {
                $data = $response->json();
                StockData::create([
                    'company_id' => $i,
                    'price' => $data[0]['price'],
                    'changes_percentage' => $data[0]['changesPercentage'],
                    'change' => $data[0]['change'],
                    'day_low' => $data[0]['dayLow'],
                    'day_high' => $data[0]['dayHigh'],
                    'year_high' => $data[0]['yearHigh'],
                    'year_low' => $data[0]['yearLow'],
                    'market_cap' => $data[0]['marketCap'],
                    'volume' => $data[0]['volume'],
                    'avg_volume' => $data[0]['avgVolume'],
                    'open' => $data[0]['open'],
                    'previous_close' => $data[0]['previousClose'],
                    'eps' => $data[0]['eps'],
                    'pe' => $data[0]['pe'],

                ]);

            } else {
                Log::error("Failed to fetch stock data for $symbol");
            }
            $i++;
        }

    }
}
