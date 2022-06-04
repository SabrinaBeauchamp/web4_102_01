<?php
 
namespace App\View\Composers;

use App\Models\CategorieForfait;
use Illuminate\View\View;
 
class CategorieForfaitComposer
{
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        $this->groupes = CategorieForfait::orderBy("nom")->get();
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->groupes);
    }
}