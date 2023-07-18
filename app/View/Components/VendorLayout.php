<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VendorLayout extends Component
{
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($title = '')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('vendor.layouts.vendor-layout');
    }
}
