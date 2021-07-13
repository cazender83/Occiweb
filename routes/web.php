<?php

use Illuminate\Support\Facades\Route;

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

Route::get('articles/searchR', 'App\Http\Controllers\RecetteController@searchR')->name('articles.searchR');

Route::post('ingredients/addInRecette/{n}', 'App\Http\Controllers\IngredientController@addInRecette')->name('ingredients.addInRecette');

Route::get('utilisateurs/connect', 'App\Http\Controllers\UtilisateurController@connect')->name('utilisateurs.connect');
Route::get('utilisateurs/deconnect', 'App\Http\Controllers\UtilisateurController@deconnect')->name('utilisateurs.deconnect');
Route::get('utilisateurs/connection', 'App\Http\Controllers\UtilisateurController@connection')->name('utilisateurs.connection');

Route::resource('recettes', 'App\Http\Controllers\RecetteController');
Route::resource('articles', 'App\Http\Controllers\ArticleController');
Route::resource('utilisateurs', 'App\Http\Controllers\UtilisateurController');
Route::resource('ingredients', 'App\Http\Controllers\IngredientController');
Route::resource('gallery', 'App\Http\Controllers\GalleryController');


Route::get('/', function () {
    return view('welcome');
});


