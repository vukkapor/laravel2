@extends('layouts.master')
@section('title')
    {{$movie->title}}
@endsection
@section('content')

    <h2>{{$movie->title}}</h2>
    <p>{{$movie->genre}}</p>
    <p>{{$movie->director}}</p>
    <p>{{$movie->year}}</p>
    <h4>{{$movie->storyline}}</h4>

    <h2>Comments</h2>

    <ul>
        @foreach ($movie->comments as $comment)
            <li>
                <p>
                    {{$comment->content}}
                </p>
                <p>
                    {{$comment->created_at}}
                </p>
            </li>
        @endforeach
    </ul>

@endsection
