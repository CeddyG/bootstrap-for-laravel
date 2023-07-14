<?php

namespace CeddyG\Bootstrap\View\Components\Breadcrumb;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Boolean to set or not the aria label current.
     * 
     * @var bool
     */
    public $current;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = null, $current = false)
    {
        $this->current = $current;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.breadcrumb.item');
    }
}
