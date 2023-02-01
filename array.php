<?php

$a = ["apple","12.3",45.6,89,null];

echo "<pre>";
print_r($a);
echo "</pre>";


echo "<pre>";
var_dump($a);
echo "</pre>";

foreach ($a as $value){
    echo $value . "<br>";
}

$b = ["fruit" => "apple",
"number" => "12.3",
"num" => 45.6,
"price" => 89,
"nothing" => null];

foreach ($b as $key => $value){
    echo $key . "=" . $value . "<br>";
}


?>