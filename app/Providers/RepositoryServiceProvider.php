<?php

namespace codeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('codeDelivery\Repositories\CategoryRepository',
            'codeDelivery\Repositories\CategoryRepositoryEloquent'
        );
        $this->app->bind('codeDelivery\Repositories\ProductRepository',
            'codeDelivery\Repositories\ProductRepositoryEloquent'
        );
        $this->app->bind('codeDelivery\Repositories\ClientRepository',
            'codeDelivery\Repositories\ClientRepositoryEloquent'
        );
        $this->app->bind('codeDelivery\Repositories\OrderItemRepository',
            'codeDelivery\Repositories\OrderItemRepositoryEloquent'
        );
        $this->app->bind('codeDelivery\Repositories\OrderRepository',
            'codeDelivery\Repositories\OrderRepositoryEloquent'
        );
        $this->app->bind('codeDelivery\Repositories\UserRepository',
            'codeDelivery\Repositories\UserRepositoryEloquent'
        );
    }
}
