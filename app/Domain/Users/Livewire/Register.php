<?php

namespace App\Domain\Users\Livewire;

use App\Domain\Users\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password,$password_confirmation;

    protected $rules = [
        'name' => 'required|min:4',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ];


    public function register()
    {
        $this->validate();

          User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
