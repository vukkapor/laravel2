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

@endsection
