<div class="mt-8">
    <a href="{{route('movies.show',$movie['id'])}}">
        <img class="hover:opacity-75 "
            src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="">
    </a>
    <div class="mt-2">
        <a class="mt-2 text-lg hover:text-gray-300">
            {{ $movie['title'] }}
        </a>
        <div class="flex  item-center text-gray-400">
            <span>star </span>
            <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
            <span class="mx-2">|</span>
            <span>{{ \carbon\carbon::parse($movie['release_date'])->format('M d,Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }}
                @if (!$loop->last){{ ',' }}
                @endif
            @endforeach
        </div>

    </div>
</div>