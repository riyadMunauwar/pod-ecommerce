<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;
use App\Models\ategory;

class TopCategories extends Component
{
    public $categories = [];


    public function mount()
    {
        $this->fetchData();
    }


    public function render()
    {
        return view('front.components.partials.top-categories');
    }


    private function fetchData()
    {
        $this->categories = Category::take(6)->get();
    }
    
}
