<?php

namespace App\Providers;

use App\View\Composers\GroupesComposer;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['groupes.checkbox', 'groupes.menu', 'categories.checks', 'index'
        ,'groupes.show', 'categories.show', 'entreprises.show'], GroupesComposer::class);
    }
}
