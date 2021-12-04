@extends('templates.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase text-yellow-500 text-lg font-semibold">
            Popular movies
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4     gap-8">
            <!-- item  -->
            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach


        </div>

    </div>
@endsection
