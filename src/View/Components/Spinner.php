<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Spinner extends Component
{
    /**
     * Define the color.
     * 
     * @var string
     */
    public $color;
    
    /**
     * Define the spinner type.
     * 
     * @var string
     */
    public $type;
    
    /**
     * Define the spinner size.
     * 
     * @var string
     */
    public $size;
    
    public function __construct($color = 'info', $type = 'border', $size = null) 
    {
        $this->color    = $color;
        $this->type     = $type;
        $this->size     = $size;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.spinner');
    }
}
