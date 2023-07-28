<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    /**
     * Define if the nav is tabs.
     * 
     * @var boolean
     */
    public $tabs;
    
    /**
     * Define if the nav is pills.
     * 
     * @var boolean
     */
    public $pills;
    
    /**
     * Define if the nav is filled.
     * 
     * @var boolean
     */
    public $fill;
    
    /**
     * Define if the nav is justified.
     * 
     * @var boolean
     */
    public $justified;
    
    public function __construct($tabs = false, $pills = false, $fill = false, $justified = false) 
    {
        $this->tabs         = $tabs;
        $this->pills        = $pills;
        $this->fill         = $fill;
        $this->justified    = $justified;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bs::components.nav.index');
    }
}
