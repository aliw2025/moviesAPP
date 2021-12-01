@extends('templates.main')
@section('content')
    <div class="container mx-auto movie-info border-b border-gray-800">
        <div class="container px-4 py-16 flex flex-col md:flex-row ">
            <div class="continer">
                <img  src="/images/joker.jpg" alt="">
            </div>
            
            
            <div class="md:ml-24 pt-4 md:pt-0 container" >
                <h2 class="text-4xl font-semibold">
                    Joker (2019)
                </h2>
                <div class="flex  item-center text-gray-400 text-sm">
                    <span>star </span>
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
            </div>
        </div>
    </div>

@endsection
