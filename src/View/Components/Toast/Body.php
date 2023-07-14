<?php

namespace CeddyG\Bootstrap\View\Components\Toast;

use Illuminate\View\Component;

class Body extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.toast.body');
    }
}
