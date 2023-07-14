<?php

namespace CeddyG\Bootstrap\View\Components\ListGroup;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.list-group.item');
    }
}
