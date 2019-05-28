<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    <title>
        @yield('title', "Movies")
    </title>
</head>
<body>
{{-- navbar --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/movies">Movies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Add movie <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
</nav>

<div class="container">
{{-- content --}}
    <div class="row">
        <div class="col-sm-8 blog-main">
            @yield('content')
        </div>
{{-- sidebar --}}
        <div class="col-sm-4 blog-main">
            @include('partials.sidebar')
        </div>
    </div>
</div>
{{-- footer --}}
@include('partials.footer')
</body>
</html>
