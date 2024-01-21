<?php

namespace App\Application\Controllers\Companies;

use App\Application\Controllers\Controller;
use App\Domain\Companies\StockDataServiceInterface;

class StockDataController extends Controller
{
    protected $stockDataService;

    public function __construct(StockDataServiceInterface $stockDataService)
    {
        $this->stockDataService = $stockDataService;
    }
    public function fetchStockData($symbol)
    {
        $stockData = $this->stockDataService->fetchStockData($symbol);

        if ($stockData) {

            return response()->json($stockData);
        }

        return response()->json(['error' => 'Stock data not found'], 404);
    }
}
