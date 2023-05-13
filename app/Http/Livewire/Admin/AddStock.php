<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;
use App\Traits\WithSweetAlert;

class AddStock extends Component
{
    use WithSweetAlert;

    public $is_add_stock_modal_show = false;


    public $product_name;
    public $price;
    public $qty;
    public $supplier_id;
    public $product_id;
    public $paid_to_supplier;

    public $suppliers = [];


    public function getTotalPurchasePriceProperty()
    {
        if($this->price && $this->qty){
            return $this->price * $this->qty;
        }

        if($this->price) {
            return $this->price;
        }

        return 0;
    }


    protected $rules = [
        'price' => ['required', 'numeric'],
        'qty' => ['required', 'integer'],
        'supplier_id' => ['nullable'],
        'product_id' => ['required'],
        'paid_to_supplier' => ['nullable', 'numeric'],
    ];


    protected $listeners = [
        'onAddStockModalShow' => 'showAddStockModal',
    ];


    public function mount()
    {
        $this->preapredInitState();
    }

    public function render()
    {
        return view('admin.components.add-stock');
    }


    public function addStock()
    {

        $this->validate();

        $success = DB::transaction(function(){
            
                        Product::find($this->product_id)->increment('stock_qty', $this->qty);

                        Purchase::create([
                            'price' => $this->price,
                            'qty' => $this->qty,
                            'supplier_id' => $this->supplier_id,
                            'product_id' => $this->product_id,
                        ]);

                        return true;
                    });

        
        if($success){
            $this->reset();
            $this->is_add_stock_modal_show = false;
            $this->emit('onProductUpdated');
            return $this->success('Sucess', 'Stock added successfully');
        }

        return $this->error('Failed', 'Stock added failed');

    }


    public function showAddStockModal($id)
    {
        $this->preapredInitState();
        $this->product_name = Product::select('name')->find($id)->name;
        $this->product_id = $id;
        $this->is_add_stock_modal_show = true;
    }

    public function cancelAddStock()
    {
        $this->reset();
        $this->is_add_stock_modal_show = false; 
    }


    private function preapredInitState()
    {
        $this->suppliers = Supplier::all();
    }

}
