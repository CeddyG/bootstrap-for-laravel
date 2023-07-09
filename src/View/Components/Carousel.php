<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Carousel extends Component
{    
    /**
     * Id of the accordion.
     * 
     * @var int
     */
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = null)
    {
        $this->id = $id ?: 'carousel-'.Str::random();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel.index');
    }
}
