<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;
use App\Models\Design;

class FeaturedProductCaurosel extends Component
{

    public $designs = [];

    public function mount()
    {
        $this->fetchData();
    }

    public function render()
    {
        return view('front.components.partials.featured-product-caurosel');
    }

    private function fetchData()
    {
        $this->designs = Design::with('product')->take(12)->get();
    }
}
