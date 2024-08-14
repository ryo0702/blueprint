<?php
class MetaSet{
    private $array;
    public function __construct($array) {
        $this->name = @$array['name'];
    }
    public function getName()
    {
        return 'Hello,'.$this->name.'!';
    }
}

// $objectMeta = new MetaSet(array('name' => 'John'));
// echo $objectMeta->getName();