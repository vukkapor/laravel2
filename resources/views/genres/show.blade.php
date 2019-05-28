@extends('layouts.master')

@section('title')


@endsection

@section('content')
<ul>
    @foreach ($moviesGenre as $movie)
        <li>

            <h2>{{$movie->title}}</h2>
            <p>{{$movie->genre}}</p>
            <p>{{$movie->director}}</p>
            <p>{{$movie->year}}</p>
            <h4>{{$movie->storyline}}</h4>

        </li>
    @endforeach
</ul>
@endsection
