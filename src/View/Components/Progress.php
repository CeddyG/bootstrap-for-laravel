<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Progress extends Component
{
    /**
     * Define the value.
     * 
     * @var int
     */
    public $value;
    
    /**
     * Define the min value.
     * 
     * @var int
     */
    public $valueMin;
    
    /**
     * Define the max value.
     * 
     * @var int
     */
    public $valueMax;
    
    /**
     * Define the color.
     * 
     * @var string
     */
    public $color;
    
    /**
     * Define if the progress bar is striped.
     * 
     * @var boolean
     */
    public $striped;
    
    /**
     * Define if the progress bar is animated.
     * 
     * @var boolean
     */
    public $animated;
    
    public function __construct(
        $value      = 0, 
        $valueMin   = 0, 
        $valueMax   = 0, 
        $color      = null, 
        $striped    = false, 
        $animated   = false
    ) 
    {
        $this->value     = $value;
        $this->valueMin  = $valueMin;
        $this->valueMax  = $valueMax;
        $this->color     = $color;
        $this->striped   = $striped;
        $this->animated  = $animated;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.progress.index');
    }
}
