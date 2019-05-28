@extends('layouts.master')
@section('title')
    {{$movie->title}}
@endsection
@section('content')

    <h2>{{$movie->title}}</h2>
    <a href="{{"/genres/" . $movie->genre}}"><p>{{$movie->genre}}</p></a>
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

    <form method="POST" action="{{ route("comments-movie", ["movieId" => $movie->id]) }}">
            @csrf

            <div class="form-group">
                <label for="content">Comment</label>
                <input
                    type="text"
                    class="form-control"
                    id="content"
                    name="content"/>
                    @include('partials.error', ["fieldTitle" => "content"])

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit comment</button>
            </div>
        </form>
@endsection
