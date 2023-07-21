<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class CategoryArchieve extends Component
{

    public $products;
    public $category;



    public function mount()
    {
        $this->products = $this->getProducts();
        $this->category = $this->getCategory();
    }


    public function render()
    {
        return view('front.components.category-archieve');
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
