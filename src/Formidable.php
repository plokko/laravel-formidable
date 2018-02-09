<?php

namespace Plokko\Formidable;

use Plokko\Formidable\FormBuilder\FormFieldsBuilder;

class Formidable {

    function __construct(array $config=[])
    {
    }

    function fields(){
        return new FormFieldsBuilder();
    }
}
