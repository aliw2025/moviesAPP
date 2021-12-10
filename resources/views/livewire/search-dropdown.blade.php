<div class="mt-0   relative ">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 h-10 px-4 py-1"
        placeholder="Search">
        <div wire:loading class="spinner top-4 right-4">

        </div>
    <div class="bg-gray-800 rounded  mt-2 w-64 absolute text-sm">
        @if (strlen($search) > 3)
            @if (count($searchResults) > 0)
                <ul>
                    @foreach ($searchResults as $movie)
                        <li class="border-b border-gray-700">
                            <a  href="{{ route('movies.show', $movie['id']) }}"
                                class="block hover:bg-gray-700 px-3 py-3 flex items-center"> <img class="w-8"
                                    src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="">
                                    <span class="ml-4">{{ $movie['title'] }} </span> </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul>
                    <li class="border-b border-gray-700">
                        <a href="#" class="block hover:bg-gray-700 px-3 py-3"> No Resuts Found </a>
                    </li>

                </ul>
            @endif
        @endif


    </div>

</div>
