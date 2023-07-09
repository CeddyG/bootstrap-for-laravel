<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

use CeddyG\Bootstrap\Services\ModelBinding;
use Illuminate\Contracts\View\Factory;

class Select extends Input
{
    /**
     * Options list.
     *
     * @var string
     */
    public $options;
    
    /**
     * Create a new select instance.
     *
     * @return void
     */
    public function __construct(Factory $view, ModelBinding $modelBinding, $name, $options, $label = null)
    {
        parent::__construct($view, $modelBinding, $name, $label);
        
        $this->options = $options;
    }
    
    /**
     * Determine if the given option is the currently selected option.
     *
     * @param  string  $option
     * @return bool
     */
    public function isSelected($option)
    {
       return $option === $this->value;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
