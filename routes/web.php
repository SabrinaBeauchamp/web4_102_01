<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\CategorieForfaitController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FavorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\CategorieRegionController;
use App\Models\Entreprise;
use App\Models\Evenement;
use App\Models\Groupe;
use App\Models\Favorie;
use App\Http\Controllers\CommoditeCOntroller;
use App\Http\Controllers\GroupeCommoditeController;
use App\Models\Categorie;
use App\Models\CategorieEntreprise;
use Dotenv\Parser\Value;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can  web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! 
|
*/
Route::get('/', function() {
    return redirect('/agrotouristique');
});
Route::get('/agrotouristique', function() {
    $favories = Favorie::all();
    $evenement = Evenement::find(1);
    //Entreprises populaires
    $entreprises = Entreprise::all();
    foreach($entreprises as $entrepriseId => $entreprise)
    {
        if($entreprise->populaire !== 1)
        {
            unset($entreprises[$entrepriseId]);
        }
    }
    //Les 3 logements choisis au hasard
    //récupère seulement les entreprises de hébergement
    $groupe = Groupe::find(5);
    $categoriesLogements = Categorie::where("groupe_id", "LIKE", "%$groupe->id%")
        ->select('id')
        ->get();
    $logements = array();
    foreach($categoriesLogements as $categorieLogements)
    {
        $entreprisesDeLoge = CategorieEntreprise::where("categorie_id", "LIKE", "%$categorieLogements->id%")
            ->select('entreprise_id')
            ->get()
            ->toArray();
        foreach($entreprisesDeLoge as $entrepriseDeLoge)
        {
            //parfois une entreprise vas se trouver dans plusieurs catégories pour éviter de l'avoir plusieurs fois, on vérifie s'il n'est pas déjà dans le tableau
            if(in_array($entrepriseDeLoge, $logements ) == false) {
                array_push($logements, $entrepriseDeLoge);
            }
        }
    };
    //choisi des logements au hasard
    $idPremierLogement = array_rand($logements);
    $premierLogement = Entreprise::find($logements[$idPremierLogement])[0];
    //[0] car à cause du $logements[$idPremierLogement], il crée une collection à l'intérieur d'un array, donc je récupère le seul élément du array.
    unset($logements[$idPremierLogement]); //On le retire pour ne pas l'avoir en double
    $idDeuxiemeLogement = array_rand($logements);
    $deuxiemeLogement = Entreprise::find($logements[$idDeuxiemeLogement])[0];
    unset($logements[$idDeuxiemeLogement]); //On le retire pour ne pas l'avoir en double
    $idTroisiemeLogement = array_rand($logements);
    $troisiemeLogement = Entreprise::find($logements[$idTroisiemeLogement])[0];
    
    return view('index',[
        'favories'=>$favories, 
        'entreprisesPopulaires' => $entreprises,
        'premierLogement' => $premierLogement,
        'deuxiemeLogement' => $deuxiemeLogement,
        'troisiemeLogement' => $troisiemeLogement,
        'evenement'=>$evenement,
    ]);
})->name('acceuil');

Route::group(['prefix'=>'/dashboard', 'as'=>'users.gestionaires.', 'controller'=>UserController::class, 'where'=>['user'=>'[0-9]+'], 'middleware'=>'auth',], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{user}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{user}/edit', 'edit')->name('edit');
    Route::post('/{user}/edit', 'update')->name('update');

    Route::get('/{user}/delete', 'delete')->name('delete');
    Route::post('/{user}/delete', 'destroy')->name('destroy');

    Route::group([ 'as'=>'favories.', 'controller'=>FavorieController::class, 'where'=>['groupe'=>'favoris|entreprises|forfaits|evenements']], function () {
        Route::get('/{groupe}', 'index')->name('index');
    });
});

Route::group(['prefix'=>'/activites/categories', 'as'=>'forfaits.categories.', 'controller'=>CategorieForfaitController::class, 'where'=>['categorie'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{categorie}', 'show')->name('show');
    
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    
    Route::get('/{categorie}/edit', 'edit')->name('edit');
    Route::post('/{categorie}/edit', 'update')->name('update');
    
    Route::get('/{categorie}/delete', 'delete')->name('delete');
    Route::post('/{categorie}/delete', 'destroy')->name('destroy');
});


Route::group(['prefix'=>'/forfaits', 'as'=>'forfaits.', 'controller'=>ForfaitController::class, 'where'=>['forfait'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{forfait}', 'show')->name('show');
    
    
    Route::get('/{forfait}/like', [FavorieController::class, 'likeF'])->name('like');
    Route::get('/{forfait}/dislike', [FavorieController::class, 'dislikeF'])->name('dislike');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{forfait}/edit', 'edit')->name('edit');
    Route::post('/{forfait}/edit', 'update')->name('update');

    Route::get('/{forfait}/delete', 'delete')->name('delete');
    Route::post('/{forfait}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/favories/entreprises', 'as'=>'favories.', 'controller'=>FavorieController::class, 'where'=>['favorie'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{favorie}/like', 'like')->name('like');

    Route::get('{favorie}/create', 'create')->name('create');
    Route::post('{favorie}/create', 'store')->name('store');

    Route::get('/{favorie}/edit', 'edit')->name('edit');
    Route::post('/{favorie}/edit', 'update')->name('update');

    Route::get('/{favorie}/delete', 'delete')->name('delete');
    Route::post('/{favorie}/delete', 'destroy')->name('destroy');
});

Route::get('/dashboard/evenement', function() {
    $evenements = Evenement::all();
    $evenements = Evenement::orderBy('start', 'asc')->get();
    return view('users.evenements.index', ['evenements'=>$evenements]);
})->name('evenements');
Route::group(['prefix'=>'/agrotouristique/evenements', 'as'=>'evenements.', 'controller'=>EvenementController::class, 'where'=>['evenement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{evenement}', 'show')->name('show');

    Route::get('/{evenement}/like', [FavorieController::class, 'likeE'])->name('like');
    Route::get('/{evenement}/dislike', [FavorieController::class, 'dislikeE'])->name('dislike');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{evenement}/edit', 'edit')->name('edit');
    Route::post('/{evenement}/edit', 'update')->name('update');

    Route::get('/{evenement}/delete', 'delete')->name('delete');
    Route::post('/{evenement}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/agrotouristique/groupes', 'as'=>'groupes.', 'controller'=>GroupeController::class, 'where'=>['groupe'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{groupe}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{groupe}/edit', 'edit')->name('edit');
    Route::post('/{groupe}/edit', 'update')->name('update');

    Route::get('/{groupe}/delete', 'delete')->name('delete');
    Route::post('/{groupe}/delete', 'destroy')->name('destroy');
});
Route::group(['prefix'=>'/agrotouristique/categories', 'as'=>'categories.', 'controller'=>CategorieController::class, 'where'=>['categorie'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{categorie}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{categorie}/edit', 'edit')->name('edit');
    Route::post('/{categorie}/edit', 'update')->name('update');

    Route::get('/{categorie}/delete', 'delete')->name('delete');
    Route::post('/{categorie}/delete', 'destroy')->name('destroy');
});

Route::get('/dashboard/populaire', function() {
    $entreprises = Entreprise::paginate(48);
    return view('users.activites_populaires.index', ['entreprises'=>$entreprises]);
})->name('populaire');
Route::get('/dashboard/les_entreprises', function() {
    $entreprises = Entreprise::paginate(48);
    return view('users.entreprises.index', ['entreprises'=>$entreprises]);
})->name('gestion');

Route::group(['prefix'=>'/agrotouristique/entreprises', 'as'=>'entreprises.', 'controller'=>EntrepriseController::class, 'where'=>['entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{entreprise}', 'show')->name('show');

    Route::get('/{entreprise}/togglePopulaire', 'togglePopulaire')->name('togglePopulaire');

    Route::get('/{entreprise}/like', [FavorieController::class, 'like'])->name('like');
    Route::get('/{entreprise}/dislike', [FavorieController::class, 'dislike'])->name('dislike');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{entreprise}/edit', 'edit')->name('edit');
    Route::post('/{entreprise}/edit', 'update')->name('update');

    Route::get('/{entreprise}/delete', 'delete')->name('delete');
    Route::post('/{entreprise}/delete', 'destroy')->name('destroy');
});
// Authentication Routes...
Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'/agrotouristique/groupesCommodite', 'as'=>'groupesCommodite.', 'controller'=>GroupeCommoditeController::class, 'where'=>['groupeCommodite'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{groupeCommodite}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{groupeCommodite}/edit', 'edit')->name('edit');
    Route::post('/{groupeCommodite}/edit', 'update')->name('update');

    Route::get('/{groupeCommodite}/delete', 'delete')->name('delete');
    Route::post('/{groupeCommodite}/delete', 'destroy')->name('destroy');
});
Route::group(['prefix'=>'/agrotouristique/commodites', 'as'=>'commodites.', 'controller'=>CommoditeController::class, 'where'=>['commodite'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{commodite}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{commodite}/edit', 'edit')->name('edit');
    Route::post('/{commodite}/edit', 'update')->name('update');

    Route::get('/{commodite}/delete', 'delete')->name('delete');
    Route::post('/{commodite}/delete', 'destroy')->name('destroy');
});
Route::group(['prefix'=>'/agrotouristique/villes', 'as'=>'villes.', 'controller'=>VilleController::class, 'where'=>['ville'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{ville}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{ville}/edit', 'edit')->name('edit');
    Route::post('/{ville}/edit', 'update')->name('update');

    Route::get('/{ville}/delete', 'delete')->name('delete');
    Route::post('/{ville}/delete', 'destroy')->name('destroy');
});
Route::group(['prefix'=>'/agrotouristique/mrc', 'as'=>'categoriesRegion.', 'controller'=>CategorieRegionController::class, 'where'=>['categorieRegion'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{categorieRegion}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{categorieRegion}/edit', 'edit')->name('edit');
    Route::post('/{categorieRegion}/edit', 'update')->name('update');

    Route::get('/{categorieRegion}/delete', 'delete')->name('delete');
    Route::post('/{categorieRegion}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/agrotouristique/recherche', 'as'=>'recherche.', 'controller'=>AppController::class], function () {
    Route::get('/', 'recherche')->name('recherche');
    Route::get('/entreprises', 'rechercheEntreprises')->name('rechercheEntreprise');
    Route::get('/avancee', 'rechercheEntreprises')->name('rechercheAvancee');
});
