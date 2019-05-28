<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($genre){
        $moviesGenre = Movie::where("genre", $genre)->get();
        return view("/genres.show", compact("moviesGenre"));
    }
}
