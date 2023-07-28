<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Define the color.
     * 
     * @var string
     */
    public $color;
    
    public function __construct($color = 'info') 
    {
        $this->color = $color;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.alert');
    }
}
