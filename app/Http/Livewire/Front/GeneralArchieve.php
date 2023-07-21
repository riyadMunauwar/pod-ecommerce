<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class GeneralArchieve extends Component
{

    public $products;


    public function mount()
    {
        $this->products = $this->getProducts();
    }

    public function render()
    {
        return view('front.components.general-archieve');
    }

    private function getProducts()
    {
        return Product::inRandomOrder()->take(12)->get();
    }

    private function getCategory()
    {
        return Category::where('slug', request()->category_slug)->first();
    }
}
