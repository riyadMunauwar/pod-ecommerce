<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;
use App\Models\Design;

class MostViewedProduct extends Component
{
    public $designs = [];


    public function mount()
    {
        $this->fetchData();
    }

    public function render()
    {
        return view('front.components.partials.most-viewed-product');
    }

    private function fetchData()
    {
        $this->designs = Design::with('product')->inRandomOrder()->take(12)->get();
    }
}
