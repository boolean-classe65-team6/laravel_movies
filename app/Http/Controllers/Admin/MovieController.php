<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Movie;
use App\Actor;
use App\Traits\MovieRating;

class MovieController extends Controller
{
    use MovieRating;

    public static $movieValidationRules = [
        "title" => "required",
        "overview" => "required",
        "release_date" => "nullable|date",
        "poster_img" => "required",
        "running_time" => "nullable|integer|min:10",
        "parental_rating" => "nullable",
        "original_language" => "nullable|size:2",
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // recuperiamo tutti i dati senza poter indicare l'ordine
        // Di default l'ordine è per id
        // $movies = Movie::all();

        // Recuperiamo tutti i dati in un ordine desiderato
        $movies = Movie::orderBy("title", "asc")->get();

        return view("admin.movies.index", compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.movies.create", [
            "movieRatings" => $this->movieRatings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {
        $data = $request->validated();

        $movie = new Movie();
        $movie->fill($data);
        $movie->save();

        return redirect()->route("admin.movies.show", $movie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        // operazione eseguita dal findOrFail e anche dalla Dependecy Injection
        /* $movie = Movie::find($id);
        if (!$movie) {
            abort(404);
        } */

        return view("admin.movies.show", compact("movie"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $actors = Actor::all();

        return view(
            "admin.movies.edit",
            [
                "movieRatings" => $this->movieRatings,
                "movie" => $movie,
                "actors" => $actors
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $data = $request->validated();

        $movie->update($data);

        return redirect()->route("admin.movies.show", $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route("admin.movies.index");
    }
}
