<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

use Illuminate\Foundation\Validation\ValidatesRequests;



class MoviesController extends Controller
{

    public function lastFive(){
        return $moviesSidebar = Movie::latest()->take(5)->get();
    }

    public function index(){
        $movies = Movie::all();

        $moviesSidebar = self::lastFive();
        return view("/movies.index", compact("movies", "moviesSidebar"));
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        $moviesSidebar = self::lastFive();

        return view("/movies.show", compact("movie", "moviesSidebar"));
    }

    public function create()
    {
        $moviesSidebar = self::lastFive();

        return view("/movies.create",compact("moviesSidebar"));

    }


    public function store()
    {
        \Log::info(request());
        $this->validate(request(), Movie::STORE_RULES);
        $year = request()->input('year');
        if($year<1900 || $year>2019){
            return view("/movies.createYear");
        }
        $movie = Movie::create(request()->all());

        return redirect()->route("all-movies");

    }

}
