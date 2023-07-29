<?php

namespace CeddyG\Bootstrap\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Modal extends Component
{    
    public $staticBackdrop;
    public $dialogScrollable;
    public $centered;
    public $size;
    public $fullscreen;
    public $fullscreenBelow;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        bool $staticBackdrop    = false,
        bool $dialogScrollable  = false,
        bool $centered          = false,
        string $size            = null,
        bool $fullscreen        = false,
        string $fullscreenBelow = null
    )
    { 
        $this->staticBackdrop   = $staticBackdrop;
        $this->dialogScrollable = $dialogScrollable;
        $this->centered         = $centered;
        $this->size             = $size;
        $this->fullscreen       = $fullscreen;
        $this->fullscreenBelow  = $fullscreenBelow;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return function (array &$data) {
            if (Arr::has($data, 'button') && !Arr::has($data, 'attributes.id')) {
                $data['attributes']['id'] = 'modal-'.Str::random();
            }
            
            if ($this->staticBackdrop) {
                $data['attributes']['data-bs-backdrop'] = 'static';
                $data['attributes']['data-bs-keyboard'] = 'false';
            }
            
            return 'bs::components.modal.index';
        };
    }
}
