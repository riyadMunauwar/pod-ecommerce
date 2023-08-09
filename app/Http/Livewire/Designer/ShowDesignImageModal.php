<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use App\Models\Design;


class ShowDesignImageModal extends Component
{

    public $is_show_design_image_modal = false;

    public $design;

    protected $listeners = [
        'onDesignImageModalShow' => 'showDesignImageModal',
    ];

    public function render()
    {
        return view('designer.components.show-design-image-modal');
    }


    public function showDesignImageModal($id)
    {
        $this->design = Design::with('product')->find($id);
        $this->is_show_design_image_modal = true;
    }


    public function hideDesignImageShowModal()
    {
        $this->reset();
        $this->is_show_design_image_modal = false; 
    }

}
