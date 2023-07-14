<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

class Date extends Input
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.forms.date');
    }
}
