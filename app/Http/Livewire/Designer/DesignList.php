<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSweetAlert;
use App\Models\Design;

class DesignList extends Component
{

    use WithPagination;
    use WithSweetAlert;

    public $search;

    protected $listeners = [
        'onDesignCreated' => '$refresh',
        'onDesignUpdated' => '$refresh',
        'onAddStock' => '$refresh',
        'onVariationDeleted' => '$refresh',
        'onDesignDelete' => 'deleteDesign',
    ];


    public function render()
    {
        $designs = $this->getDesigns();
        return view('designer.components.design-list', compact('designs'));
    }

    public function enableDesignEditMode($id)
    {
        $this->emit('onDesignEdit', $id);
    }

    public function confirmDeleteDesign($id)
    {
        return $this->ifConfirmThenDispatch('onDesignDelete', $id, 'Are you sure ?', 'Design will delete permanently !');
    }


    public function deleteDesign($id)
    {
        try {

            $design = Design::find($id);

            $design->categories()->detach();

            if($design->delete()){
                return $this->success('Success', 'Design deleted successfully.');
            }

        }catch(\Exception $e)
        {
            return $this->error('Failed', $e->getMessage());
        }

    }


    public function showDesignImageModal($id)
    {
        return $this->emit('onDesignImageModalShow', $id);
    }

    private function getDesigns()
    {

        $search = $this->search;

        $query = Design::where('user_id', auth()->id());

        $query->when($this->search, function($query) use($search){
            $query->where('title', 'like', '%' . $search . '%');
        });

        return $query->with('product', 'product.categories', 'product.brand')->paginate(25);

    }
}
