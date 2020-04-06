<?php

namespace App\Providers;

use App\Repositories\ExpenseRepository;
use App\Repositories\ExpenseRepositoryInterface;
use App\Repositories\IncomeRepository;
use App\Repositories\IncomeRepositoryInterface;
use App\Services\ExpenseService;
use App\Services\ExpenseServiceInterface;
use App\Services\IncomeService;
use App\Services\IncomeServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
   $this->app->bind(IncomeServiceInterface::class,IncomeService::class);
   $this->app->bind(IncomeRepositoryInterface::class,IncomeRepository::class);
   $this->app->bind(ExpenseServiceInterface::class,ExpenseService::class);
   $this->app->bind(ExpenseRepositoryInterface::class,ExpenseRepository::class);

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
