<?php

namespace CeddyG\Bootstrap\View\Components\Nav;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.nav.link');
    }
}
