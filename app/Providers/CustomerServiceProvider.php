<?php

namespace App\Providers;

use App\Repositories\Contracts\CustomerRepositoryContract;
use App\Repositories\CustomerRepository;
use App\Services\CustomerService\Contracts\CustomerServiceContract;
use App\Services\CustomerService\CustomerService;
use Illuminate\Support\ServiceProvider;

/**
 * Class CustomerServiceProvider
 * @package App\Providers
 */
class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            CustomerServiceContract::class,
            CustomerService::class
        );
        $this->app->bind(
            CustomerRepositoryContract::class,
            CustomerRepository::class
        );
    }
}
