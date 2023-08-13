<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;
use App\Models\Design;

class PopularProduct extends Component
{
    public $designs = [];


    public function mount()
    {
        $this->fetchData();
    }

    public function render()
    {
        return view('front.components.partials.popular-product');
    }

    public function showDesignImageModal($id)
    {
        return $this->emit('onDesignImageModalShow', $id);
    }

    private function fetchData()
    {
        $this->designs = Design::with('product')->inRandomOrder()->take(12)->get();
    }
}
