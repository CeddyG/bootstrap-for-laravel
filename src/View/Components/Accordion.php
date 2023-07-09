<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Accordion extends Component
{
    /**
     * Will add data-bs-parent attribute to sub item if true.
     * 
     * @var bool
     */
    public $alwaysOpen;
    
    /**
     * Will add accordion-flush class to accordion if true.
     * 
     * @var bool
     */
    public $flush;
    
    /**
     * Id of the accordion.
     * 
     * @var int
     */
    public $idAccordion;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($alwaysOpen = false, $flush = false, $id = null)
    {
        $this->alwaysOpen   = $alwaysOpen;
        $this->flush        = $flush;
        $this->idAccordion  = $id;
        
        if (!$alwaysOpen && is_null($id)) {
            $this->idAccordion = 'accordion-'.Str::random();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.accordion.index');
    }
}
