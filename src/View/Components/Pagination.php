<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{    
    /**
     * Define the pagination size.
     * 
     * @var string
     */
    public $size;
    
    public function __construct($size = null) 
    {
        $this->size = $size;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.pagination.index');
    }
}
