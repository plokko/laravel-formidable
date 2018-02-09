<?php
namespace Plokko\Formidable\FormBuilder;

use JsonSerializable;

class FieldBuilder implements JsonSerializable {
    private $args=[];
    public function __construct($name)
    {
        $this->args=['name'=>$name];
    }
    function __call($fn,$args){
        $this->args[$fn]=$args[0];
        return $this;
    }
    public function jsonSerialize()
    {
        return $this->args;
    }
    function __toString()
    {
        return json_encode($this);
    }

    function __get($name)
    {
        return $this->args[$name];
    }

    function __label($trans_id,$data=[]){
        return $this->label(__($trans_id,$data));
    }

}