<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use App\Traits\WithSweetAlert;
use App\Traits\WithSweetAlertToast;

class CreateDesign extends Component
{
    use WithSweetAlert;
    use WithSweetAlertToast;
    
    public function render()
    {
        return view('designer.components.create-design');
    }
}
