<?php

namespace CeddyG\Bootstrap\Models;

/**
 * Description of ModelBinding
 *
 * @author ceddy
 */
class ModelBinding
{
    /**
     * The model binded.
     *
     * @var string
     */
    public $model;
    
    public function setModel($model)
    {
        $this->model = $model;
    }
}
