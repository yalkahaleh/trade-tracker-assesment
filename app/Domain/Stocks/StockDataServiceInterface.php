<?php
namespace App\Domain\Stocks;

interface StockDataServiceInterface
{
    /**
     * Fetch stock data for a given symbol.
     *
     * @param string $symbol
     * @return array
     */
    public function fetchStockData($symbol);
}
