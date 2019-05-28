@extends('layouts.master')

@section('title')
    Movies
@endsection

@section('content')

    Movies
    <ul>
        @foreach ($movies as $movie)
            <li>
            <a href="{{ $movie->id}}">{{$movie->title}}</a>

                {{$movie->storyline}}
            </li>
        @endforeach

    </ul>
@endsection
