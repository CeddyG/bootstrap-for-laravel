<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    /**
     * Define the color.
     * 
     * @var string
     */
    public $color;
    
    /**
     * Define if the button is outline.
     * 
     * @var string
     */
    public $outline;
    
    /**
     * Define the button size.
     * 
     * @var string
     */
    public $size;
    
    public function __construct($color = 'info', $outline = false, $size = null) 
    {
        $this->color    = $color;
        $this->outline  = $outline;
        $this->size     = $size;
    }
        
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.dropdown.index');
    }
}
