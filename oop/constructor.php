<?php

class person{

    public $name,$age;

    function __construct($n = "No name",$a = 0){
        $this->name = $n;
        $this->age = $a;
    }

    function show(){
        echo $this->name . ":" . $this->age . "<br>";
    }

}

$obj = new person("Neel",22);
$obj->show();

$obj2 = new person();
$obj2->show();
?>

