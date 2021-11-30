@extends('templates.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase text-yellow-500 text-lg font-semibold">
            Popular movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5  gap-8">
            <!-- item  -->
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/parasite.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                        Parasite
                    </a>
                    <div class="flex  item-center text-gray-400">
                        <span>star </span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>feb 20 ,2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller , Comedy
                    </div>

                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/parasite.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                        Parasite
                    </a>
                    <div class="flex  item-center text-gray-400">
                        <span>star </span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>feb 20 ,2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller , Comedy
                    </div>

                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/parasite.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                        Parasite
                    </a>
                    <div class="flex  item-center text-gray-400">
                        <span>star </span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>feb 20 ,2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller , Comedy
                    </div>

                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/parasite.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                        Parasite
                    </a>
                    <div class="flex  item-center text-gray-400">
                        <span>star </span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>feb 20 ,2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller , Comedy
                    </div>

                </div>
            </div>
            
            
        </div>
        
    </div>
@endsection
