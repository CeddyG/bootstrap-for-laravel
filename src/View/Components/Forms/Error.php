<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

use Illuminate\View\Component;

class Error extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.forms.error');
    }
}
