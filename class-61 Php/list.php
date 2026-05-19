<?php
$arr = ["Mitu",12,false];
list($name,$age,$it_active) = $arr;

echo $name;
echo "<br>";
echo $age;
echo "<br>";
//echo $it_active ;
echo $it_active?"it is active":"it is not active";
echo "<br>";
var_dump($arr);
?>