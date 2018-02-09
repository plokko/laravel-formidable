<?php
namespace Plokko\Formidable\FormBuilder;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class FormFieldsBuilder implements JsonSerializable
{
    private
        $fields = [];

    public function __construct(){}


    function add(String $name){
        return $this->fields[$name] = new FieldBuilder($name);
    }


    function __call($fn,$args){
        return $this->add($args[0])->type($fn);
    }

    public function jsonSerialize()
    {
        return array_values($this->fields);
    }
    function __toString()
    {
        return json_encode($this);
    }
    function fillValues($data){
        if($data instanceof Arrayable){
            $data = $data->toArray();
        }
        foreach($data AS $k=>$v)
        {
            if(isset($this->fields[$k])){
                $this->fields[$k]->value($v);
            }
        }
    }
    function translateBase($trans_id,$field='label'){
        foreach($this->fields AS $f){
            $tr = trans(str_replace([':name'],[$f->name],$trans_id));
            $f->{$field}($tr);
        }
    }

}