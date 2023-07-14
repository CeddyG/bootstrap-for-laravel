<?php

namespace CeddyG\Bootstrap\View\Components\Layout;

use Illuminate\View\Component;

class Col extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.layout.col');
    }
}
