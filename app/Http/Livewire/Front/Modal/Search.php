<?php

namespace App\Http\Livewire\Front\Modal;

use Livewire\Component;
use App\Models\Design;

class Search extends Component
{

    public $is_search_mode_on = false;

    protected $listeners = [
        'onSearchMode' => 'enableSearch'
    ];

    public function render()
    {
        $designs = $this->getSearchResults();
        return view('front.components.modals.search', compact('designs'));
    }

    public function searching()
    {
        $this->render();
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

    private function getSearchResults()
    {
        return Design::paginate(10);
    }
}
