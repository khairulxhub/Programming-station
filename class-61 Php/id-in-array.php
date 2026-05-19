<?php
$arr = [1,2,3,4,5,"a"];
$str = "str";
echo is_array($arr) ? " array": "Not array";
echo "<br>";
echo is_array($str) ? " array": "Not array";
echo "<br>";
echo in_array("a",$arr) ? " string": "Not string";
echo "<br>";
echo in_array(22,$arr) ? " string": "Not string";
?>