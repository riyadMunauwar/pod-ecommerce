<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use App\Traits\WithSweetAlert;
use App\Traits\WithSweetAlertToast;
use App\Models\Design;
use App\Models\DesignItem;
use App\Models\Product;

class CreateDesign extends Component
{
    use WithSweetAlert;
    use WithSweetAlertToast;


    
    public function render()
    {
        return view('designer.components.create-design', [
            'products' => $this->getProducts(),
        ]);
    }


    private function getProducts()
    {
        return Product::paginate(10);
    }
}
