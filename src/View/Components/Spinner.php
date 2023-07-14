<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Spinner extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.spinner');
    }
}
