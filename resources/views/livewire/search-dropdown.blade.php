<div class="mt-0   relative ">
    <input  wire:model = "search" type="text" class="bg-gray-800 rounded-full w-64 h-10 px-4 py-1" placeholder="Search">
    <div class="bg-gray-800 rounded  mt-2 w-64 absolute text-sm">
            <ul>
                <li class="border-b border-gray-700">
                    <a href="#" class="block hover:bg-gray-700 px-3 py-3">{{$search}}</a>
                </li>
                <li class="border-b border-gray-700">
                    <a href="#" class="block hover:bg-gray-700 px-3 py-3">Avengers</a>
                </li>
                <li class="border-b border-gray-700">
                    <a href="#" class="block hover:bg-gray-700 px-3 py-3">Avengers</a>
                </li>
                {{-- <li>
                    <button wire:click="searchData('{{$search}}')" class="bg-red-500 p-4" onclick="">
                        click me
                    </button>
                </li> --}}
                


            </ul>
    </div>

</div>

    