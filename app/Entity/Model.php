<?php

namespace Entity;

class Model
{
    public $table;
    
    public function getproperty()
    {
        return get_object_vars($$model);
    }
  
}
