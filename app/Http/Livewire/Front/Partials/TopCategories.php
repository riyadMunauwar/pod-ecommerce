<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;
use App\Models\Category;

class TopCategories extends Component
{
    public $topCategories = [];


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
        $this->topCategories = Category::take(6)->get();
    }

}
