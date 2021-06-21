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

Route::resource('recettes', 'App\Http\Controllers\RecetteController');
Route::resource('articles', 'App\Http\Controllers\ArticleController');
Route::resource('utilisateurs', 'App\Http\Controllers\UtilisateurController');
Route::resource('ingredients', 'App\Http\Controllers\IngredientController');

Route::get('/', function () {
    return view('welcome');
});


