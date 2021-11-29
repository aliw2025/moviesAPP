<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800 ">
        {{-- flex with space between --}}
        <div class="container mx-auto  py-6 flex item-center justify-between">
            {{-- left items --}}
            <div class="flex">
                {{-- branding --}}
                <div class="branding flex ">
                    <a href="#"> <img class="w-10"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy1CyUxMIs5v3tYBDghCdlN_cFJFp0upbqBQ&usqp=CAU"
                            alt=""></a>
                    <div class="ml-2 branding text-pink-300 font-bold text-xl    ">
                        <a href="#">MoviesApp</a>

                    </div>
                </div>
                {{-- navigation --}}
                <ul class="flex item-center">
                    <li class="ml-16 hover:text-gray-300">
                        <a href="#">Movies</a>
                    </li>
                    <li class="ml-6 hover:text-gray-300">
                        <a href="#">TV shows</a>
                    </li>
                    <li class="ml-6 hover:text-gray-300">
                        <a href="#">Actors</a>
                    </li>
                </ul>
            </div>

            {{-- right items --}}
            <div class="flex item-center ">
                <input type="text" class="bg-gray-800 rounded-full w-64 h-10 px-4 py-1" placeholder="Search">
                <div class="ml-4">
                    <img class="w-8 rounded-full " src="/images/profile.jpg" alt="">
                </div>
            </div>

        </div>
    </nav>
    @yield('content')
   
</body>

</html>
