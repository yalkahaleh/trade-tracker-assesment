<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class UpdateStockDataTest extends TestCase
{
    use DatabaseTransactions;

    public function testUpdateStockDataCommand()
    {
        // Fake the HTTP client
        Http::fake([
            '*/api/stock-data/*' => Http::response([
                ['price' => 191.56,
                    'changesPercentage'=>0.15,
                    'change'=>2.93,
                    'dayLow'=>188.82,
                    'dayHigh'=>191.95,
                    'yearHigh'=>199.62,
                    'yearLow'=>134.22,
                    'marketCap'=>2961881564000,
                    'volume'=>65761937,
                    'avgVolume'=>54311296,
                    'open' => 189.33,
                    'previousClose'=>188.63,
                    'eps'=>6.14,
                    'pe'=>31.20
                    ],
            ], 200),
        ]);

        $this->artisan('update:stockdata')
            ->assertExitCode(0);


    }
}
