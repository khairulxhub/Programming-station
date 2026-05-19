<?php
/*
1. Numeric /Indexed Array 
2. Associative Array
3. Multidimensional Array
*/
$arr_num = ["a", "b", "c", "d", "e", 123, True, false];

echo "<pre>";
print_r($arr_num);
var_dump($arr_num);
echo "</pre>";

$arr_assoc = [
    "name" => "Raju",
    "age" => 20,
    "city" => "Dhaka",
    "country" => [
        "c1" => "Bangladesh",
        "c2" => "Malta",
    ]
];
$arr_assoc["name"] = "Khairul-Vhai";
echo "<br>";
$arr_assoc["city"] = "Coxsbazar";
echo "<pre>";
print_r($arr_assoc);
var_dump($arr_assoc);
echo "</pre>";
echo $arr_assoc["name"];
echo "<br>";
echo $arr_assoc["country"]["c1"];
echo "<br>";
echo $arr_assoc["country"]["c2"];
echo "<br>";
echo $arr_assoc["city"];

$arr_multi = [
    ["a", "b", "c", "d"],
    ["e", "f", "g", "h"],
    ["i", "j", "k", "l"],
    ["m", "n", "o", "p"],
];

echo "<pre>";
print_r($arr_multi);
var_dump($arr_multi);
echo "</pre>";

echo $arr_multi[2][1];
