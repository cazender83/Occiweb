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

Route::resource('recettes', 'App\Http\Controllers\RecetteController');
Route::resource('articles', 'App\Http\Controllers\ArticleController');

Route::get('/', function () {
    return view('welcome');
});


