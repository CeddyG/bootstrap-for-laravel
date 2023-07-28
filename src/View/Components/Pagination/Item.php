<?php

namespace CeddyG\Bootstrap\View\Components\Pagination;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Define the href.
     * 
     * @var string
     */
    public $href;
    
    /**
     * Define if the link is disabled.
     * 
     * @var boolean
     */
    public $disabled;
    
    /**
     * Define if the link is active.
     * 
     * @var boolean
     */
    public $active;
    
    public function __construct($href = null, $disabled = false, $active = false) 
    {
        $this->href     = $href;
        $this->disabled = $disabled;
        $this->active   = $active;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.pagination.item');
    }
}
