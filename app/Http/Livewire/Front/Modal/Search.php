<?php

namespace App\Http\Livewire\Front\Modal;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Design;

class Search extends Component
{

    use WithPagination;

    public $show_per_page = 9;

    public $is_search_mode_on = false;

    public $search_term;

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
        $search_term = trim($this->search_term);

        $query = Design::query();

        // $query->when($search_term, function($query) use($search_term) {

            $query->orWhereHas('product', function($query) use($search_term){
                
                $searchQuery = "%" . $search_term . "%";

                $query->where('name', 'like', $searchQuery)
                      ->orWhere('name', $search_term)
                      ->orWhere('meta_description', 'like', $searchQuery)
                      ->orWhere('meta_description', $search_term)
                      ->orWhere('meta_tags', 'like', $searchQuery)
                      ->orWhere('meta_tags', $search_term)
                      ->orWhere('meta_title', 'like', $searchQuery)
                      ->orWhere('meta_title', $search_term)
                      ->orWhere('short_description', 'like', $searchQuery)
                      ->orWhere('short_description', $search_term)
                      ->orWhere('description', 'like', $searchQuery)
                      ->orWhere('description', $search_term)
                      ->orWhere('variation_options', 'like', $searchQuery)
                      ->orWhere('variation_options', $search_term);
                              
            });

        // });

        return $query->paginate($this->show_per_page);
    }
}
