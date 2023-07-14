<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

use CeddyG\Bootstrap\Models\ModelBinding;
use Illuminate\Contracts\View\Factory;

class Checkbox extends Input
{
    /**
     * Value of the checkbox.
     *
     * @var string
     */
    public $valueCheckbox;
    
    /**
     * Create a new select instance.
     *
     * @return void
     */
    public function __construct(Factory $view, ModelBinding $modelBinding, $name, $label = null, $value = true)
    {
        $this->valueCheckbox = $value;
        
        parent::__construct($view, $modelBinding, $name, $label);
    }
    
    /**
     * Determine if this checkbox is checked.
     *
     * @param  string  $option
     * @return bool
     */
    public function isChecked()
    {
        return is_array($this->value) 
            ? in_array($this->valueCheckbox, $this->value) 
            : $this->valueCheckbox == $this->value;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.forms.checkbox');
    }
}
