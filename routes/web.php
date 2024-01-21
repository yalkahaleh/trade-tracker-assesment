<?php

use App\Domain\Companies\Livewire\Create as CreateCompany;
use App\Domain\Companies\Livewire\Index as CompanyIndex;
use App\Domain\Companies\Livewire\Show as CompanyShow;
use App\Domain\Users\Livewire\Login;
use App\Domain\Users\Livewire\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/',CompanyIndex::class);
Route::group([
    'prefix'=>'company'
],
    function () {
    Route::get('/create', CreateCompany::class)->middleware('auth')->name('company.create');
        Route::get('/{companyId}', CompanyShow::class)->name('company.show');

    });

