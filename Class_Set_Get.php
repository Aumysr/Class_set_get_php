<?php

class My_Class {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function printName() {
        echo $this->name;
    }
}

$my_name = new My_Class("Jasper");
$my_name->printName();

?>