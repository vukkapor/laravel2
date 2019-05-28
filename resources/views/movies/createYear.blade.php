@extends('layouts.master')
@section('title')
    Add a new movie
@endsection
@section('content')

<form method="POST" action="{{ route("store-movie") }}">
    @csrf

    Year not betwen 1900 and 2019
{{-- title --}}

    <div class="form-group">
        <label for="title">Title</label>
        <input
            type="text"
            class="form-control"
            id="title"
            name="title"/>
            @include('partials.error', ["fieldTitle" => "title"])
    </div>

{{-- genre --}}

    <div class="form-group">
            <label for="genre">Genre</label>
            <input
                type="text"
                class="form-control"
                id="genre"
                name="genre"/>
                @include('partials.error', ["fieldTitle" => "genre"])
    </div>

{{-- director --}}

    <div class="form-group">
            <label for="director">Director</label>
            <input
                type="text"
                class="form-control"
                id="director"
                name="director"/>
                @include('partials.error', ["fieldTitle" => "director"])
    </div>

{{-- year --}}

    <div class="form-group">
            <label for="year">Year</label>
            <input
                type="text"
                class="form-control"
                id="year"
                name="year"/>
                @include('partials.error', ["fieldTitle" => "year"])
    </div>

{{-- storyline --}}

    <div class="form-group">
            <label for="storyline">Storyline</label>
            <input
                type="text"
                class="form-control"
                id="storyline"
                name="storyline"/>
                @include('partials.error', ["fieldTitle" => "storyline"])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add movie</button>
    </div>
</form>
@endsection
