<?php
$arr = ["cat","zoo","Dog","Apple","Gun"];
$arr_num = [102,3,4,50,1010];

echo "<pre>";
print_r($arr);
echo "</pre>";
sort($arr); //sort in ascending order
rsort($arr_num); //sort in descending order
rsort($arr_num);
echo "<pre>";
print_r($arr);
print_r($arr_num);
echo "</pre>";


$arr_assoc=[
    "USA" => "Washington",
    "Bangladesh" => "Dhaka",
    "Malta" => "Valletta",
    "Srilanka" => "Colombo",
    "Nepal" => "Kathmandu",
    "Bhutan" => "Thimphu",
    "pakistan" => "Islamabad",
    "UK" => "London",
]
;

echo "<pre>";
print_r($arr_assoc);
echo "</pre>";

// 
// arsort($arr_assoc);


echo "<pre>";
print_r($arr_assoc);
arsort($arr_assoc);
echo "</pre>";

echo "<pre>";
print_r($arr_assoc);
var_dump($arr_assoc);
asort($arr_assoc);
echo "</pre>";
 

?>