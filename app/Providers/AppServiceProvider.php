<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application Services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application Services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function (User $user) {
            return $user->username === 'Alexotieno';
        });

        Blade::if('admin', function (){
            return request()->user()?->can('admin');
        });
    }
}
