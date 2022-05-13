<?php

use App\Http\Controllers\GroupeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\CategorieForfaitController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FavorieController;

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

Route::group(['prefix'=>'/forfaits/categories', 'as'=>'forfaits.categories.', 'controller'=>CategorieForfaitController::class, 'where'=>['categorie'=>'[0-9]+']], function () {
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

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{forfait}/edit', 'edit')->name('edit');
    Route::post('/{forfait}/edit', 'update')->name('update');

    Route::get('/{forfait}/delete', 'delete')->name('delete');
    Route::post('/{forfait}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/users/favories', 'as'=>'favories.', 'controller'=>FavorieController::class, 'where'=>['favorie'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{favorie}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{favorie}/edit', 'edit')->name('edit');
    Route::post('/{favorie}/edit', 'update')->name('update');

    Route::get('/{favorie}/delete', 'delete')->name('delete');
    Route::post('/{favorie}/delete', 'destroy')->name('destroy');
});






// Route::group(['prefix'=>'/agrotouristique/forfaits', 'as'=>'forfaits.', 'controller'=>ForfaitController::class, 'where'=>['forfait'=>'[0-9]+']], function () {
//     Route::get('/', 'index')->name('index');
//     Route::get('/{forfait}', 'show')->name('show');

//     Route::get('/create', 'create')->name('create');
//     Route::post('/create', 'store')->name('store');

//     Route::get('/{forfait}/edit', 'edit')->name('edit');
//     Route::post('/{forfait}/edit', 'update')->name('update');

//     Route::get('/{forfait}/delete', 'delete')->name('delete');
//     Route::post('/{forfait}/delete', 'destroy')->name('destroy');
// });

// Route::group(['prefix'=>'/agrotouristique/categories', 'as'=>'categories.', 'controller'=>CategorieForfaitController::class, 'where'=>['categorie'=>'[0-9]+']], function () {
//     Route::get('/', 'index')->name('index');
//     Route::get('/{categorie}', 'show')->name('show');

//     Route::get('/create', 'create')->name('create');
//     Route::post('/create', 'store')->name('store');

//     Route::get('/{categorie}/edit', 'edit')->name('edit');
//     Route::post('/{categorie}/edit', 'update')->name('update');

//     Route::get('/{categorie}/delete', 'delete')->name('delete');
//     Route::post('/{categorie}/delete', 'destroy')->name('destroy');
// });

Route::group(['prefix'=>'/agrotouristique/evenements', 'as'=>'evenements.', 'controller'=>EvenementController::class, 'where'=>['evenement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{evenement}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{evenement}/edit', 'edit')->name('edit');
    Route::post('/{evenement}/edit', 'update')->name('update');

    Route::get('/{evenement}/delete', 'delete')->name('delete');
    Route::post('/{evenement}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/groupes', 'as'=>'groupes.', 'controller'=>GroupeController::class, 'where'=>['groupe'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{groupe}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{groupe}/edit', 'edit')->name('edit');
    Route::post('/{groupe}/edit', 'update')->name('update');

    Route::get('/{groupe}/delete', 'delete')->name('delete');
    Route::post('/{groupe}/delete', 'destroy')->name('destroy');
});
Route::group(['prefix'=>'/categories', 'as'=>'categories.', 'controller'=>CategorieController::class, 'where'=>['categorie'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{categorie}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{categorie}/edit', 'edit')->name('edit');
    Route::post('/{categorie}/edit', 'update')->name('update');

    Route::get('/{categorie}/delete', 'delete')->name('delete');
    Route::post('/{categorie}/delete', 'destroy')->name('destroy');
});
Route::group(['prefix'=>'/entreprises', 'as'=>'entreprises.', 'controller'=>EntrepriseController::class, 'where'=>['entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{entreprise}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{entreprise}/edit', 'edit')->name('edit');
    Route::post('/{entreprise}/edit', 'update')->name('update');

    Route::get('/{entreprise}/delete', 'delete')->name('delete');
    Route::post('/{entreprise}/delete', 'destroy')->name('destroy');
});

Auth::routes();


