<?php

namespace App\Providers;

use App\View\Composers\GroupesComposer;
use App\View\Composers\CategorieForfaitComposer;
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
        ,'groupes.show', 'categories.show', 'entreprises.show', 'entreprises.index', 'rechercheAvancee', 'categoriesRegion.index', 'categoriesRegion.show'], GroupesComposer::class);
        
        View::composer(['forfaits.categories.radios'], CategorieForfaitComposer::class);
    }
}
