<?php

namespace Database\Seeders;

use App\Domain\Users\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email'=>'y.alkahaleh@gmail.com',
            'name'=>'Yazan Alkahala',
            'password'=>bcrypt(12345678),
        ]);
    }
}
