<?php

namespace Database\Seeders;

use App\Domain\Companies\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name'=>'AAPL',
            'description'=>'Apple',
            'address'=>'One Apple Park Way, Cupertino, California',
            'logo'=>'logos/apple.jpg'
        ]);

        Company::create([
            'name'=>'TSLA',
            'description'=>'Tesla',
            'address'=>'13101 Harold Green Road, Austin, Texas 78725.',
            'logo'=>'logos/tesla.png'
        ]);
    }
}
