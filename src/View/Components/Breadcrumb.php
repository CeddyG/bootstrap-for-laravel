<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * Build style string if there is a custom divider.
     * 
     * @var string 
     */
    public $style;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($style = null, $divider = null)
    {
        $this->buildStyle($style, $divider);
    }
    
    protected function buildStyle($style, $divider)
    {
        if (!is_null($style) || !is_null($divider)) {
            $this->style = 'style="'.(is_null($divider) ? '' : '--bs-breadcrumb-divider: \''.$divider.'\'; ').$style.'"';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb.index');
    }
}
