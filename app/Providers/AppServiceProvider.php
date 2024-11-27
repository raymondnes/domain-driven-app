<?php

namespace App\Providers;

use Domains\User\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            \Domains\Core\Interfaces\RepositoryInterface::class, 
            UserRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}