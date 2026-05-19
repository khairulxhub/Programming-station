<?php
$arr = [
    "a"=>"hello",
    "b"=>"world",
    "c"=>"2026",
    "d"=>"khairul",
    "e"=>"islam"
];
echo "<pre>";
print_r(array_reverse($arr));
echo "</pre>";
$arr2 = [
    "a"=>"hello",
    "b"=>"world",
    "c"=>"2026",
    "d"=>"khairul",
    "e"=>"islam"
];
echo "<pre>";
print_r(array_flip($arr2));
echo "</pre>";
echo "<pre>";
print_r(array_flip($arr));
echo "</pre>";
echo "<pre>";
print_r(array_reverse($arr2));
echo "</pre>";

$city = [
    "dhaka",
    "chittagong",
    "khulna",
    "rajshahi",
    "sylhet"
];
echo "<pre>";
print_r(array_reverse($city));
echo "</pre>";

//array reverse and array flip

?>