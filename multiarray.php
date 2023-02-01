<?php


$emp = [
    [1,"krishna",2005],
    [2,"amit",2805],
    [3,"hasmukh",2605],
    [4,"neel",2905],
];
echo "<br>";
echo "multidimensional array";

echo "<pre>";
print_r($emp);
echo "</pre>";
echo "<br>";

echo "for loop";
echo "<br>";
for($row = 0; $row < 4 ; $row++){
    for ($col = 0; $col < 4; $col++){
        echo $emp[$row][$col]. " ";
    }
    echo "<br>";
}

echo "<br>";
echo "for each";
echo "<br>";
foreach($emp as $row){
    foreach($row as $col){
    echo $col . " ";
    }
    echo "<br>";
}

echo "<br>";
echo "foreach as list()";
echo "<br>";
foreach($emp as list($a,$b,$c)){
    echo "$a $b $c" ."<br>";
}

echo "<br>";
echo "multidimensional associative array ";
$stu = [
    "neel" =>["rollnumber"=>1,"Bmonth"=>"march","year"=>2005],
    "meel" =>["rollnumber"=>2,"Bmonth"=>"feb","year"=>2001],
    "jeel" =>["rollnumber"=>3,"Bmonth"=>"jan","year"=>2002],
];

echo "<pre>";
print_r($stu);
echo "</pre>";

?>