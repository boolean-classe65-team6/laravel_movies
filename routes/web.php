<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', "HomeController@index")->name("home");

Route::middleware("auth")
    ->prefix("admin")
    ->name("admin.")
    ->namespace("Admin")
    ->group(function () {

        Route::resource('/movies', 'MovieController');

        Route::get('/home', 'HomeController@index')->name('home');
    });



// Crea tutte le rotte necessarie per l'autenticazione: Login, reset password, register, email verify
Auth::routes();
