<?php
$str = "Hello World 2026";
$arr =explode(" ",$str);

echo "<pre>";
print_r($arr);
echo "</pre>";

$str = "H-l-l-o W-o-r-l-d 2026";
$arr =explode("-", $str);
echo "<pre>";
print_r($arr);
echo "</pre>";

$str = "Banladesh";
$arr = explode("d", $str);  
echo "<pre>";
print_r($arr);
echo "</pre>";

$newstr = implode("", $arr);
echo $newstr;

$str = "Hello World BD";
$arr = explode(" ", ($str));
echo "<pre>";
print_r($arr);
echo "</pre>";

$newstr = implode("|", $arr);
echo $newstr;

$arr2 = range("a","x",5);
$arr3 = range(1,100,5);

echo "<pre>";
print_r($arr2);
echo "</pre>";

echo "<pre>";
print_r($arr3);
echo "</pre>";

$arr_assoc =[
    "a" => "Apple",
    "b" => "Ball",
    "c" => "Cat",
];
echo array_key_exists("b", $arr_assoc) ? "Found" : "Not Found";

$key = array_keys($arr_assoc);
echo "<pre>";
print_r($key);
echo "</pre>";

$value = array_values($arr_assoc);
echo "<pre>";
print_r($value);
echo "</pre>";

///Explode and implode array , Range to code . Array key exists. Array keys and array values
?>