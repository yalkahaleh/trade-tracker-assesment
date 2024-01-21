<?php

namespace App\Domain\Companies\Livewire;

use App\Domain\Companies\Company;
use App\Domain\Companies\StockDataServiceInterface;
use Livewire\Component;

class Show extends Component
{
    public $company;
    public $stockData;

    public function mount($companyId, StockDataServiceInterface $stockDataService)
    {
        $this->company = Company::findOrFail($companyId);
        $this->stockData = $stockDataService->fetchStockData($this->company->name);
    }
    public function render()
    {
        return view('livewire.company.show', [
            'stockData' => $this->stockData,
        ]);
    }
}
