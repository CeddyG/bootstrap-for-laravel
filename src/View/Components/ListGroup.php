<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class ListGroup extends Component
{
    /**
     * Define if the list-group is flushed.
     * 
     * @var string
     */
    public $flush;
    
    /**
     * Define if the list-group is numbered.
     * 
     * @var string
     */
    public $numbered;
    
    public function __construct($flush = false, $numbered = false) 
    {
        $this->flush        = $flush;
        $this->numbered     = $numbered;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.list-group.index');
    }
}
