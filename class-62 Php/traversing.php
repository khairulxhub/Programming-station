<?php
$arr =[
    "a"=>"hello",
    "b"=>"world",
    "c"=>"2026",
    "d"=>"khairul",
    "e"=>"islam"
];
// echo key($arr)."<br>" ;
// echo current($arr)."<br>";
// echo end($arr)."<br>";
// echo prev($arr)."<br>";
// echo next($arr)."<br>";
// echo reset($arr)."<br>";
// echo end($arr)."<br>";

echo current($arr)."<br>";
echo next($arr)."<br>";
echo prev($arr)."<br>";
echo next($arr)."<br>";
echo next($arr)."<br>";
echo next($arr)."<br>";
echo end($arr)."<br>";
echo next($arr)."<br>";
echo prev($arr)."<br>";
echo current($arr)."<br>";
echo reset($arr) ."<br>";


echo sizeof($arr)."<br>";
echo count($arr)."<br>";

// current
// next
// prev
// reset
// end

?>