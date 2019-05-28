<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{

    public function store($movieId)
    {
        $this->validate(request(), Comment::STORE_RULES);
        $movie = Movie::find($movieId);

        \Log::info(request());
        $movie->comments()->create(request()->all());

        return redirect()->route("single-movie", ["id" => $movieId]);


    }
}
