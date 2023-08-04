<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\Variation;
use App\Traits\WithSweetAlert;

class EditVariation extends Component
{
    use WithFileUploads;
    use WithSweetAlert;

    public $is_edit_mode_on = false;

    public $variation;

    protected $listeners = [
        'onVariationEdit' => 'enableVariationEditMode',
    ];


    protected $rules = [
        'variation.stock_qty' => ['required', 'integer'],
    ];


    public function render()
    {
        return view('admin.components.edit-variation');
    }
    

    public function updated($attribute, $value)
    {
        if($attribute === 'variation.stock_qty'){
            if(empty($value)){
                $this->variation->stock_qty = null;
            }
        }
    }

    public function updateVariation()
    {

        $this->validate();

        if($this->variation->save()){

            $this->is_edit_mode_on = false;

            $this->emit('onVariationUpdated');

            $this->emit('onVariatioShow', $this->variation->product_id);

            $this->reset();

            return $this->success('Updated', 'Variation updated successfully');
        }
        
        return $this->error('Failed', 'Something went wrong. Try again !');

    }


    public function enableVariationEditMode($id)
    {

        $this->variation = Variation::find($id);

        $this->is_edit_mode_on = true;

    }


    public function cancelEditMode()
    {
        $this->emit('onVariatioShow', $this->variation->product_id);
        $this->reset();
        $this->is_edit_mode_on = false;
    }
}
