<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

use Illuminate\Foundation\Validation\ValidatesRequests;



class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view("/movies.index", compact("movies"));
    }

    public function show($id){
        $movie = Movie::findOrFail($id);

        return view("/movies.show", compact("movie"));
    }

    public function create()
    {
        return view("/movies.create");
    }


    public function store()
    {
        \Log::info(request());
        $this->validate(request(), Movie::STORE_RULES);
        $movie = Movie::create(request()->all());

        return redirect()->route("all-movies");

    }
}
