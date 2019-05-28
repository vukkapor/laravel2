<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    const STORE_RULES = [
        "title" => "required",
        "genre" => "required",
        "director" => "required",
        "year" => "required | max:4 | int",
        "storyline" => "required | max:1000"
    ];

    protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
