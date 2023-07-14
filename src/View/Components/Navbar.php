<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Navbar extends Component
{    
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $id = null)
    { 
        $this->id = $id ?: 'navbar-'.Str::random();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.navbar.index');
    }
}
