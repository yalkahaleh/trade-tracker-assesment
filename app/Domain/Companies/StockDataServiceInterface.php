<?php
namespace App\Domain\Companies;

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
