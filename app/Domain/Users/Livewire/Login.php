<?php

namespace App\Domain\Users\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended('/');
        } else {
            session()->flash('error', 'Invalid credentials');
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
