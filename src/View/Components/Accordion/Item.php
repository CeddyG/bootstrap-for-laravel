<?php

namespace CeddyG\Bootstrap\View\Components\Accordion;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Item extends Component
{
    /**
     * Id of the accordion item.
     * 
     * @var int
     */
    public $id;
    
    /**
     * Boolean to show or not the accordion item.
     * 
     * @var bool
     */
    public $show;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = null, $show = false)
    {
        $this->id   = $id ?: 'accordion-item-'.Str::random();
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.accordion.item');
    }
}
