<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

use Illuminate\View\Component;

class Submit extends Component
{
    /**
     * The button color.
     *
     * @var string
     */
    public $color;
    
    /**
     * The model's value.
     *
     * @var string
     */
    public $value;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'primary', $value = null)
    {
        $this->color = $color;
        $this->value = $value;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.forms.submit');
    }
}
