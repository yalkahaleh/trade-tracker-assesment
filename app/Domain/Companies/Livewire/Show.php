<?php

namespace App\Domain\Companies\Livewire;

use App\Domain\Companies\Company;
use Livewire\Component;

class Show extends Component
{
    public $company;

    public function mount($companyId)
    {
        $this->company = Company::findOrFail($companyId);
    }
    public function render()
    {
        return view('livewire.company.show');
    }
}
