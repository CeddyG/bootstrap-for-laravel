<?php

namespace CeddyG\Bootstrap\View\Components\Forms;

use CeddyG\Bootstrap\Models\ModelBinding;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\View\Component;

abstract class Input extends Component
{
    /**
     * The View factory instance.
     *
     * @var \Illuminate\Contracts\View\Factory
     */
    protected $view;
    
    /**
     * The binded model.
     *
     * @var string
     */
    public $model;
    
    /**
     * The input's name.
     *
     * @var string
     */
    public $name;
    
    /**
     * The input's label.
     *
     * @var string
     */
    public $label;
    
    /**
     * The model's value.
     *
     * @var string
     */
    public $value;
    
    /**
     * Set if the label is floating.
     *
     * @var string
     */
    public $floatingLabel;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        Factory $view, 
        ModelBinding $modelBinding, 
        $name, 
        $label = null, 
        $value = null,
        $floatingLabel = false
    )
    {
        $this->view             = $view;
        $this->model            = $modelBinding->model;
        $this->name             = $name;
        $this->label            = $label;
        $this->value            = $this->getValue($name, $value);
        $this->floatingLabel    = $floatingLabel;
    }
    
    /**
     * Get the value that should be assigned to the field.
     *
     * @param  string $name
     * @param  string $value
     *
     * @return mixed
     */
    protected function getValue($name, $value = null)
    {
        if (is_null($name)) {
            return $value;
        }

        $old = $this->old($name);

        if (!is_null($old) && $name !== '_method') {
            return $old;
        }

        if (function_exists('CeddyG\Bootstrap')) {
            $hasNullMiddleware = CeddyG\Bootstrap("Illuminate\Contracts\Http\Kernel")
                ->hasMiddleware(ConvertEmptyStringsToNull::class);

            if ($hasNullMiddleware
                && is_null($old)
                && is_null($value)
                && !is_null($this->view->shared('errors'))
                && count(is_countable($this->view->shared('errors')) ? $this->view->shared('errors') : []) > 0
            ) {
                return null;
            }
        }

        if (!is_null($value)) {
            return $value;
        }

        return !is_null($this->model) ? data_get($this->model, $this->transformKey($name)) : '';
    }

    /**
     * Get a value from the session's old input.
     *
     * @param  string $name
     *
     * @return mixed
     */
    public function old($name)
    {
        $key = $this->transformKey($name);
        
        if (old($key)) {
            $payload = old($key);

            if (!is_array($payload)) {
                return $payload;
            }

            if (
                !($this instanceof Checkbox) 
                && !($this instanceof Select)
                && collect($payload)->isNotEmpty()
            ) {
                return collect($payload)->shift();
            }

            return $payload;
        }
    }

    /**
     * Transform key from array to dot syntax.
     *
     * @param  string $name
     *
     * @return mixed
     */
    protected function transformKey($name)
    {
        return str_replace(['.', '[]', '[', ']'], ['_', '', '.', ''], $name);
    }
}
