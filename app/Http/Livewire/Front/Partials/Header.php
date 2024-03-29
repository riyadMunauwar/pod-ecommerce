<?php

namespace App\Http\Livewire\Front\Partials;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('front.components.partials.header');
    }


    public function enableSearchMode()
    {
        return $this->emit('onSearchMode');
    }
}
