<?php

namespace App\Http\Livewire\Front\Modal;

use Livewire\Component;

class Search extends Component
{

    public $is_search_mode_on = false;

    protected $listeners = [
        'onSearchMode' => 'enableSearch'
    ];

    public function render()
    {
        return view('front.components.modals.search');
    }


    public function enableSearch()
    {
        $this->is_search_mode_on= true;
    }

    public function cancelSearch()
    {
        $this->reset();
        $this->is_search_mode_on = false;
    }
}
