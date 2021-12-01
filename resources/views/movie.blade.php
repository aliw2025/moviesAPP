@extends('templates.main')
@section('content')
<!-- movie detial sectoin -->
<div class="container mx-auto movie-info border-b border-gray-800">
    <div class="container px-4 py-16 flex flex-col md:flex-row ">
        <div class="continer">
            <img src="/images/joker.jpg" alt="">
        </div>


        <div class="md:ml-24 pt-4 md:pt-0 container">
            <h2 class="text-4xl font-semibold">
                Joker (2019)
            </h2>
            <div class="pt-2 flex  item-center text-gray-400 text-sm">
                <span>Star </span>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>feb 20 ,2020</span>
                <span class="mx-2">|</span>
                <span>
                    Action, Thriller , Comedy
                </span>
            </div>
            <p class="mt-8 text-gray-300">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi vitae illum facilis atque sed nulla
                officia enim necessitatibus? Facere minus rerum non repellendus asperiores? Aut ipsum perspiciatis
                tempora exercitationem, doloribus hic. Eveniet dolor quia possimus ipsa deserunt officiis, fugiat,
                libero ea similique neque impedit vero corrupti? Accusantium perferendis placeat nisi!
            </p>
            <div class="mt-12">
                <div class="text-white font-semibold">Featured Cast</div>
                <div class="flex mt-4">
                    <div>
                        <div>Bong joon-ho</div>
                        <div class="text-sm test-gray-400">Screenplay , Director ,Story</div>
                    </div>
                    <div class="ml-8">
                        <div>Han jin-won</div>
                        <div class="text-sm test-gray-400">Screenplay </div>
                    </div>
                </div>
            </div>
            <button class="mt-8 bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
                Play Trailer
            </button>

        </div>
    </div>
</div>
<!-- cast section -->
<div class="container mx-auto px-4 py-16 border-b border-gray-800 ">
        <h2 class="uppercase  text-lg font-semibold">
            CAST
        </h2>
        <!-- grid of items -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5  gap-8">
            <!-- item  -->
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/actor1.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                       Real name
                    </a>
                    
                    <div class="text-gray-400 text-sm">
                        Tom cruise
                    </div>

                </div>
            </div>
            <!-- item  -->
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/actor2.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                       Real name
                    </a>
                    
                    <div class="text-gray-400 text-sm">
                        Tom cruise
                    </div>

                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/actor3.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                       Real name
                    </a>
                    
                    <div class="text-gray-400 text-sm">
                        Tom cruise
                    </div>

                </div>
            </div>
        </div>
</div>
<!-- images section -->
<div class="container mx-auto px-4 py-16 border-b border-gray-800 ">
        <h2 class="uppercase  text-lg font-semibold">
            Images
        </h2>
        <!-- grid of items -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3   gap-8">
            <!-- item  -->
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/image1.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                       Real name
                    </a>
                    
                    <div class="text-gray-400 text-sm">
                        Tom cruise
                    </div>

                </div>
            </div>
            <!-- item  -->
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/image2.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                       Real name
                    </a>
                    
                    <div class="text-gray-400 text-sm">
                        Tom cruise
                    </div>

                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img  class="hover:opacity-75 " src="/images/image3.jpg" alt="">
                </a>
                <div class="mt-2">
                    <a class="mt-2 text-lg hover:text-gray-300">
                       Real name
                    </a>
                    
                    <div class="text-gray-400 text-sm">
                        Tom cruise
                    </div>

                </div>
            </div>
        </div>
</div>
@endsection