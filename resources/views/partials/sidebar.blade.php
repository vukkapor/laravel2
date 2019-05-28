
    <aside class="col-md-12 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="font-italic">Last 5 movies</h4>
            </div>

            <div class="p-4">
                @foreach ($moviesSidebar as $movie)

                    <li><a href="{{"/movies/" . $movie->id}}">{{$movie->title}}</a></li>
                @endforeach
            </div>

          </aside><!-- /.blog-sidebar -->
