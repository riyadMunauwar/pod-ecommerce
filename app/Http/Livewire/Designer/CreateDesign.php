<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Traits\WithSweetAlert;
use App\Traits\WithSweetAlertToast;
use App\Models\Design;
use App\Models\Product;
use App\Models\Category;


class CreateDesign extends Component
{
    use WithFileUploads;
    use WithSweetAlert;
    use WithSweetAlertToast;


    public $step = 1;

    // Design Property
    public $product_id;
    public $product_photo;
    public $title;
    public $slug;
    public $design_sale_price;
    public $design_regular_price;
    public $meta_title;
    public $meta_description;
    public $meta_tags;
    public $is_published;

    // Design Specific Property
    public $design_image;
    public $design_top;
    public $design_left;
    public $design_width;
    public $design_height;
    public $design_opacity;
    public $design_rotate_angel;


    protected $rules = [
        'product_id' => ['required', 'integer'],
        'title' => ['required', 'string', 'max:255'],
        'slug' => ['required', 'string', 'max:255'],
        'design_sale_price' => ['required', 'numeric'],
        'design_sale_price' => ['required', 'numeric'],
        'meta_title' => ['required', 'string', 'max:255'],
        'meta_description' => ['required', 'string', 'max:2024'],
        'meta_tags' => ['required', 'string', 'max:255'],
        'design_image' => ['required', 'image'],
        'resources' => ['required'],
        'design_top' => ['required', 'numeric'],
        'design_left' => ['required', 'numeric'],
        'design_width' => ['required', 'numeric'],
        'design_height' => ['required', 'numeric'],
        'design_rotate_angel' => ['required', 'numeric'],
        'is_published' => ['required', 'boolean']
    ];


    // Search Property
    public $search;

    // Search Result
    public $products = [];

    // Resources
    public $resources = [];


    public function mount()
    {
        $this->getInitData();      
    }

    public function render()
    {
        return view('designer.components.create-design');
    }


    public function updatedTitle($value)
    {
        if($value){
            $this->slug = Str::slug($value);
        }
    }


    public function setStep($step)
    {
        $this->step = $step;

        return $this->dispatchBrowserEvent('init:design-js');
    }


    public function createDesign()
    {
        $this->validate();
        
        try {

            // $design = new Design();

            // $design->title = $this->title;
            // $design->slug = $this->slug;
            // $design->design_sale_price = $this->design_sale_price;
            // $design->design_regular_price = $this->design_regular_price;
            // $design->meta_title = $this->meta_title;
            // $design->meta_description = $this->meta_description;
            // $design->meta_tags = $this->meta_tags;
            // $design->design_top = $this->design_top;
            // $design->design_left = $this->design_left;
            // $design->design_width = $this->design_width;
            // $design->design_height = $this->design_height;
            // $design->design_opacity = $this->design_opacity;
            // $design->design_rotate_angel = $this->design_rotate_angel;
            // $design->product_id = $this->product_id;
            // $design->user_id = auth()->id();

            // if(!$design->save()) return $this->error('Failed !', 'Failed to published design. Something went wrong. Please try again or contact with Elitg support team.');

            // if($this->design_image){
            //     $design->addMedia($this->design_image)->toMediaCollection('design');
            // }

            // if(count($this->resources) > 0){
            //     foreach($this->resources as $resource){
            //         $design->addMedia($resource)->toMediaCollection('resources');
            //     }
            // }

            $categories = Product::find($this->product_id)->categories;

            dd($categories);
            return $this->success('Published', 'Your design is publsihed successfully.');


        }catch(\Exception $e){
            return $this->error('Error', $e->getMessage());
        }


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


    public function removeAllResources()
    {
        foreach($this->resources as $resource){
            $resource->delete();
        }

        $this->resources = [];
    }


    public function removeResource($index)
    {
        $newResources = array_filter($this->resources, function($value, $key) use($index){
            
            if($key === $index){
                $value->delete();
                return false;
            }else {
                return true;
            }

        }, ARRAY_FILTER_USE_BOTH);

        $this->resources = $newResources;
    }

    
    public function selectProduct($id)
    {
        $product = Product::find($id);

        $this->product_id = $product->id;
        $this->product_photo = $product->thumbnailUrl('medium');
    }

    

    public function updatedDesignImage($value)
    {
        if($value){
            return $this->dispatchBrowserEvent('init:design-js');
        }
    }


    public function removeDesign()
    {
        $this->design_image->delete();
        $this->design_image = null;
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
       $this->products = Product::published()->inRandomOrder()->take(8)->get();
    }

    private function isIntegerString($str) {
        return preg_match('/^[0-9]+$/', $str);
    }

}
