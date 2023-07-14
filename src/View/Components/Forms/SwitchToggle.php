<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

class SwitchToggle extends Checkbox
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.forms.switch-toggle');
    }
}
