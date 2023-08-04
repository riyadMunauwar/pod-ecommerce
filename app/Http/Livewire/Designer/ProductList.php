<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Traits\WithSweetAlert;

class ProductList extends Component
{

    use WithPagination;
    use WithSweetAlert;


    public function render()
    {
        $products = $this->getProducts();

        return view('designer.components.product-list', compact('products'));
    }


    private function getProducts()
    {
        return Product::paginate(6);
    }

}
