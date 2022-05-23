<?php
 
namespace App\View\Composers;

use App\Models\Groupe;
use Illuminate\View\View;
 
class GroupesComposer
{
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        $this->groupes = Groupe::orderBy("nom")->get();
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('groupes', $this->groupes);
    }
}