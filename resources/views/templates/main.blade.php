<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
    @livewireStyles
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800 ">
        {{-- flex with space between --}}
        <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row item-center justify-between ">
            {{-- left items --}}
            <div class="flex flex-col mx-auto md:mx-0 md:flex-row">
                {{-- branding --}}
                <div class="branding flex mx-auto md:mx-0">
                    <a href="#"> <img class="w-10"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy1CyUxMIs5v3tYBDghCdlN_cFJFp0upbqBQ&usqp=CAU"
                            alt=""></a>
                    <div class="ml-2 branding text-pink-300 font-bold text-xl    ">
                        <a href={{route('movies.index')}} >MoviesApp</a>
                        <!-- <a href="/">MoviesApp</a> -->
                    </div>
                </div>
                {{-- navigation --}}
                <ul class="flex  p-4 md:p-0 text-center md:flex-row item-center">
                    <li class="md:ml-16 p-2 hover:text-gray-300">
                        <a href="#">Movies</a>
                    </li>
                    <li class="md:ml-6 p-2 hover:text-gray-300">
                        <a href="#">TV shows</a>
                    </li>
                    <li class="md:ml-6 p-2 hover:text-gray-300">
                        <a href="#">Actors</a>
                    </li>
                </ul>
            </div>

            {{-- right items --}}
            <div class="flex mx-auto md:mx-0 item-center  ">
                @livewire('search-dropdown')
                <div class="ml-4 ">
                    <img class="w-8 rounded-full object-center  " src="/images/profile.jpg" alt="">
                </div>
            </div>

        </div>
    </nav>
    @yield('content')
    @livewireScripts
    
</body>

</html>
<!-- https://api.themoviedb.org/3/movie/550?api_key=2bd360f927a0cc6ebbdf4b0a1ed86d82 -->