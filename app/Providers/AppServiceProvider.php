<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function(User $user){
            return $user->role === 'admin';
        });

        Gate::define('kepala', function(User $user){
            return $user->role === 'kepala';
        });

        Gate::define('sekertaris', function(User $user){
            return $user->role === 'sekretaris';
        });
    }
}
