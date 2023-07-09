<?php

namespace CeddyG\Bootstrap\View\Components;

use CeddyG\Bootstrap\Services\ModelBinding;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * The real method (can be PUT, PATCH, DELETE ...).
     *
     * @var string
     */
    public $realMethod;
    
    /**
     * The method set to the form.
     *
     * @var string
     */
    public $method;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ModelBinding $modelBinding, $model = null, $method = null)
    {
        $modelBinding->setModel($model);
        list($this->realMethod, $this->method) = $this->formatMethod($method);
    }
    
    protected function formatMethod($method)
    {
        $method = strtoupper($method);
        
        return !is_null($method) && $method != 'GET' && $method != 'POST' 
            ? [$method, 'POST']
            : [null, $method];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return function (array &$data) {
            $data['attributes']['method'] = $this->method;
            
            return 'components.form';
        };
    }
}
