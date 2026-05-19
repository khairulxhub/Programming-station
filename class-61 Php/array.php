<?php
$arr1 =["a","b","c","d","e",123,True,[1,2,3,4,5,[1,2,3,4,5]]];
$arr2 = array(4,5,6,7,8);
echo "<pre>";
print_r($arr1);
echo "<br>";
var_dump($arr1);
print_r($arr2);
echo "</pre>";

echo count($arr1);
echo "<br>";
echo count($arr2);

echo "<br>";
echo $arr1[3];
echo "<br>";
echo $arr2[2];
echo "<br>";
echo $arr1[7][2];
echo "<br>";
echo $arr1[7][5][4];


?>