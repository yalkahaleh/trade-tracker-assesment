<?php

namespace App\Domain\Companies\Livewire;

use App\Domain\Companies\Company;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $description, $address, $logo;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'address' => 'required|string|max:255',
        'logo' => 'required|image|max:1024'
    ];

    public function submit()
    {
        $this->validate();

        $company=Company::create([
            'name' => $this->name,
            'description' => $this->description,
            'address' => $this->address,
        ]);
        $filename = 'logos/' . Str::random(10) . '.' . $this->logo->getClientOriginalExtension();
        $this->logo->storeAs('', $filename,'public_uploads');
        $company->logo = $filename;
        $company->save();

        session()->flash('message', 'Company successfully created.');

        return redirect('/');
    }
    public function render()
    {
        return view('livewire.company.create');
    }
}
