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


    public $design;

    public function mount()
    {
        $id = request()->id;

        if($id) return redirect()->route('home');

        $design = Product::find($id);

        if(!$design) return abort(404);

        $this->design = $design;

    }

    public function render()
    {
        return view('front.components.product-detail');
    }
}
