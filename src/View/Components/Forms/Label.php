<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

use Illuminate\View\Component;

class Label extends Component
{
    /**
     * The input's name.
     *
     * @var string
     */
    public $name;
    
    /**
     * The label text.
     *
     * @var string
     */
    public $label;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = null, $label = null)
    {
        $this->name     = $name;
        $this->label    = $label;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.forms.label');
    }
}
