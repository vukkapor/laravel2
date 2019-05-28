<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    const STORE_RULES = [
        "content" => "required"
    ];
    protected $fillable = ['content'];

    public function post()
    {
        return $this->belongsTo(Movie::class);
    }
}
