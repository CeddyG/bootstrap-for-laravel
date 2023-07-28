<?php

namespace CeddyG\Bootstrap\View\Components\Nav;

use Illuminate\View\Component;

class Link extends Component
{ 
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
    
    public function __construct($disabled = false, $active = false) 
    {
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
        return view('bs::components.nav.link');
    }
}
