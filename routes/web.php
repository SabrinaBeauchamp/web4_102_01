<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\CategorieForfaitController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\CommoditeController;
use App\Http\Controllers\GroupeCommoditeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return redirect('/agrotouristique');
});

Route::get('/agrotouristique', function() {
    return view('index');
});
Route::get('/menu', function() {
    return view('groupes.menu');
});
Route::group(['prefix'=>'/agrotouristique/forfaits', 'as'=>'forfaits.', 'controller'=>ForfaitController::class, 'where'=>['forfait'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{forfait}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{forfait}/edit', 'edit')->name('edit');
    Route::post('/{forfait}/edit', 'update')->name('update');

    Route::get('/{forfait}/delete', 'delete')->name('delete');
    Route::post('/{forfait}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/agrotouristique/categoriesForfait', 'as'=>'.categories.', 'controller'=>CategorieForfaitController::class, 'where'=>['categorie'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{categorie}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{categorie}/edit', 'edit')->name('edit');
    Route::post('/{categorie}/edit', 'update')->name('update');

    Route::get('/{categorie}/delete', 'delete')->name('delete');
    Route::post('/{categorie}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/agrotouristique/evenements', 'as'=>'.evenements.', 'controller'=>EvenementController::class, 'where'=>['evenement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{evenement}', 'show')->name('show');

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
Route::group(['prefix'=>'/agrotouristique/entreprises', 'as'=>'entreprises.', 'controller'=>EntrepriseController::class, 'where'=>['entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{entreprise}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{entreprise}/edit', 'edit')->name('edit');
    Route::post('/{entreprise}/edit', 'update')->name('update');

    Route::get('/{entreprise}/delete', 'delete')->name('delete');
    Route::post('/{entreprise}/delete', 'destroy')->name('destroy');
});

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

Route::group(['prefix'=>'/agrotouristique/recherche', 'as'=>'recherche.', 'controller'=>AppController::class], function () {
    Route::get('/', 'recherche')->name('recherche');
    Route::get('/entreprises', 'rechercheEntreprises')->name('rechercheEntreprise');
    Route::get('/avancee', 'rechercheEntreprises')->name('rechercheAvancee');
});