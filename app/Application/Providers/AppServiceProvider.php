<?php

namespace App\Application\Providers;

use App\Domain\Stocks\StockDataServiceInterface;
use App\Infrastructure\Services\FMPStockDataService;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class   AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StockDataServiceInterface::class, FMPStockDataService::class);
        Livewire::component('users.register', \App\Domain\Users\Livewire\Register::class);
        Livewire::component('users.login', \App\Domain\Users\Livewire\Login::class);
        Livewire::component('companies.create', \App\Domain\Companies\Livewire\Create::class);
        Livewire::component('companies.show', \App\Domain\Companies\Livewire\Show::class);



    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
