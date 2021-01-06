<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\CardRepositoryInterface;
use App\Repository\CardRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CardRepositoryInterface::class, CardRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
