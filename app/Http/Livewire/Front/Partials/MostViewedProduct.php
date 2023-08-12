<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;

class MostViewedProduct extends Component
{
    public $products = [];


    public function mount()
    {
        $this->fetchData();
    }

    public function render()
    {
        return view('front.partials.most-viewed-product');
    }

    private function fetchData()
    {
        $this->products = Design::with('product')->inRandomOrder()->take(12)->get();
    }
}
