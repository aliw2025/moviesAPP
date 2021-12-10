<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class SearchDropdown extends Component
{
    public $search="";
    public function render()
    {   
        $apiKey = config('services.tmbd.token');
        // dd($apiKey);
        $searchResults=[];
        if(strlen($this->search)>3){
            $searchResults = Http::get("https://api.themoviedb.org/3/search/movie?query={$this->search}&api_key=".$apiKey)->json()['results'];
            
        }
        // dump($searchResults);
        return view('livewire.search-dropdown',['searchResults' => collect($searchResults)->take(7)]);
    }
    public function searchData($data){  
        dd($data);  
    }
}
