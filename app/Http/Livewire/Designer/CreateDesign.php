<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use App\Traits\WithSweetAlert;
use App\Traits\WithSweetAlertToast;
use App\Models\Design;
use App\Models\DesignItem;
use App\Models\Product;
use App\Models\Category;

class CreateDesign extends Component
{
    use WithSweetAlert;
    use WithSweetAlertToast;

    public $product_id;
    public $product_photo;
    public $title;
    public $slug;
    public $design_sale_price;
    public $design_regular_price;
    public $meta_title;
    public $meta_description;
    public $meta_tags;
    public $feature;
    public $description;

    // Design Specific Property
    public $design_top;
    public $design_left;
    public $design_width;
    public $design_height;
    public $design_opacity_color;
    public $design_opacity;
    public $design_rotate_angel;


    // Search Property
    public $search;

    // Search Result
    public $products = [];


    public function mount()
    {
        $this->getInitData();      
    }

    public function render()
    {
        return view('designer.components.create-design');
    }


    
    public function searchProduct()
    {
        $this->validate([
            'search' => ['required', 'string']
        ]);


        if($this->isIntegerString($this->search)){
            $this->products = $this->getProducts($this->search, true);
        }
        else {
            $this->products = $this->getProducts($this->search, false);
        }

    }

    
    public function selectProduct($id)
    {
        $product = Product::find($id);

        $this->product_id = $product->id;
        $this->product_photo = $product->thumbnailUrl('medium');
    }

    private function getProducts($search, $isIntStr)
    {
        if($isIntStr){
            return Product::where('id', $search)->get();
        }

        return Product::where('name', 'like', '%' . $search . '%')
                      ->orWhere('name', $search)
                      ->get();

    }


    private function getInitData()
    {
       
    }

    private function isIntegerString($str) {
        return preg_match('/^[0-9]+$/', $str);
    }

}
