<?php

use App\Http\Controllers\GroupeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\CategorieForfaitController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FavorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

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
    return view('index');
});
// Route::get('/dashboard', function() {
//     return view('users.gestionaires.index');
// });

Route::group([
    'prefix'=>'/dashboard', 
    'as'=>'users.gestionaires.', 
    'controller'=>UserController::class, 
    'where'=>['user'=>'[0-9]+'], 
    'middleware'=>'auth'], 
    function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{user}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{user}/edit', 'edit')->name('edit');
    Route::post('/{user}/edit', 'update')->name('update');

    Route::get('/{user}/delete', 'delete')->name('delete');
    Route::post('/{user}/delete', 'destroy')->name('destroy');
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

    Route::get('/{entreprise}/edit', 'edit')
        ->name('edit')
        ->middleware('auth');
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

