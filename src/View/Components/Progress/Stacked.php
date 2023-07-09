<?php

namespace CeddyG\Bootstrap\View\Components\Progress;

use Illuminate\View\Component;

class Stacked extends Component
{    
    public $stacked = true;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.progress.stacked');
    }
}
