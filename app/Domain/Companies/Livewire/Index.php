<?php

namespace App\Domain\Companies\Livewire;

use App\Domain\Companies\Company;
use Livewire\Component;

class Index extends Component
{
    public $companies;
    public function mount()
    {
        $this->companies = Company::all();
    }
    public function render()
    {
        return view('livewire.company.index');
    }
}
