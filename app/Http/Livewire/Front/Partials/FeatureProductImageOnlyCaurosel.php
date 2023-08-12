<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;
use App\Models\Design;

class FeatureProductImageOnlyCaurosel extends Component
{
    public $designs = [];

    public function mount()
    {
        $this->fetchData();
    }

    public function render()
    {
        return view('front.components.partials.feature-product-image-only-caurosel');
    }

    public function fetchData()
    {
        $this->designs = Design::with('product')->inRandomOrder()->take(12)->get();
    }

}
