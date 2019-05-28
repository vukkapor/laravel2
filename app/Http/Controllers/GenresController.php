<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{

    public function lastFive(){
        return $moviesSidebar = Movie::latest()->take(5)->get();
    }
    public function show($genre){
        $moviesGenre = Movie::where("genre", $genre)->get();
        $moviesSidebar = self::lastFive();
        return view("/genres.show", compact("moviesGenre", "moviesSidebar"));
    }

}
