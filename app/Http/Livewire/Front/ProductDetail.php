<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;
use App\Traits\WithSweetAlert;
use App\Traits\WithSweetAlertToast;

class ProductDetail extends Component
{
    use WithSweetAlert;
    use WithSweetAlertToast;


    public $product;

    public function mount()
    {
        $id = request()->id;

        if($id) return redirect()->route('home');

        $product = Product::find($id);

        if(!$product) return abort(404);

        $this->product = $product;

    }

    public function render()
    {
        return view('front.components.product-detail');
    }
}
