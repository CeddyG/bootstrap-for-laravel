<?php

namespace CeddyG\Bootstrap\View\Components\Modal;

use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.modal.footer');
    }
}
