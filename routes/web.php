<?php

use App\Http\Controllers\MoviesController;
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

        Route::get('/', 'HomeController@index')->name('home');


        // index
        Route::get("/movies", "MovieController@index")->name("movies.index");


        // create
        Route::get("/movies/create", "MovieController@create")->name("movies.create");
        // store
        Route::post("/movies", "MovieController@store")->name("movies.store");


        // show
        Route::get("/movies/{movie}", "MovieController@show")->name("movies.show");


        // edit - mostra una view con il form della risorsa
        Route::get("/movies/{movie}/edit", "MovieController@edit")->name("movies.edit");
        // update - riceve i dati dal form e li salva a db

        // Route::patch("/movies/{movie}", "MovieController@update")->name("movies.update");
        // Route::put("/movies/{movie}", "MovieController@update")->name("movies.update");

        // tramite il match indichiamo che la rotta può essere chiamata sia in PATCH che in PUT
        Route::match(["patch", "put"], "/movies/{movie}", "MovieController@update")->name("movies.update");

        // destroy
        Route::delete("/movies/{movie}", "MovieController@destroy")->name("movies.destroy");
    });



// Crea tutte le rotte necessarie per l'autenticazione: Login, reset password, register, email verify
Auth::routes();
