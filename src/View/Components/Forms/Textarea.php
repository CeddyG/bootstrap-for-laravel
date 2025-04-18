<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

class Textarea extends Input
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.forms.textarea');
    }
}
