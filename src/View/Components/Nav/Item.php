<?php

namespace CeddyG\Bootstrap\View\Components\Nav;

use Illuminate\View\Component;

class Item extends Component
{ 
    /**
     * Define if the item is a dropdown.
     * 
     * @var boolean
     */
    public $dropdown;
    
    public function __construct($dropdown = false) 
    {
        $this->dropdown = $dropdown;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.nav.item');
    }
}
