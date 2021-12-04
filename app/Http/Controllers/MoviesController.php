<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiKey = '2bd360f927a0cc6ebbdf4b0a1ed86d82';

        $popular = Http::get("https://api.themoviedb.org/3/movie/popular?api_key=" . $apiKey)->json()['results'];
        // dd($popular);       
        // dd(count($popular));
        $genreArray = Http::get("https://api.themoviedb.org/3/genre/movie/list?api_key={$apiKey}&language=en-US")
            ->json('genres');
        
        // dump($popular);
        $genres = collect($genreArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        //dump($genres);
        return view('index', [
            'popularMovies' => $popular,
            'genres' => $genres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $apiKey = '2bd360f927a0cc6ebbdf4b0a1ed86d82';
        https://api.themoviedb.org/3/movie/{movie_id}?api_key=2bd360f927a0cc6ebbdf4b0a1ed86d82&language=en-US
        $movie = Http::get("https://api.themoviedb.org/3/movie/{$id}?api_key={$apiKey}")->json();
        // dd($movie);
       dump($movie);
        return view('movie',['movie'=>$movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
