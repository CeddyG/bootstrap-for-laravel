<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

use CeddyG\Bootstrap\Services\ModelBinding;
use Illuminate\Contracts\View\Factory;

class Radio extends Input
{
    /**
     * Value of the radio.
     *
     * @var string
     */
    public $valueRadio;
    
    /**
     * Create a new select instance.
     *
     * @return void
     */
    public function __construct(Factory $view, ModelBinding $modelBinding, $name, $label = null, $value = null)
    {
        $this->valueRadio = $value;
        
        parent::__construct($view, $modelBinding, $name, $label);
    }
    
    /**
     * Determine if this radio is checked.
     *
     * @param  string  $option
     * @return bool
     */
    public function isChecked()
    {
       return $this->valueRadio === $this->value;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.radio');
    }
}
