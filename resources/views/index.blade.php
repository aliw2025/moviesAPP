@extends('templates.main')
@section('content')
    <div class="container  mx-auto px-4 pt-16">
        <h2 class="uppercase text-yellow-500 text-lg font-semibold">
            Popular movies
        </h2>
        <div class="grid grid-cols-4  gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="/images/parasite.jpg" alt="">
    
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

                </div>
            </div>
            <div class="h-16">

            </div>
            
            
            
        </div>
        
    </div>
@endsection
