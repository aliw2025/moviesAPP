<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchDropdown extends Component
{
    public $search="hello world";
    public function render()
    {
        return view('livewire.search-dropdown');
    }
    public function searchData($data){
        dd($data);
    }
}
