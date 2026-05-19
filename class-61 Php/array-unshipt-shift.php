<?php
$arr = ["mina","Raju","Mitu"];

echo "<pre>";
print_r($arr);
echo "</pre>";

array_unshift($arr,"Khairul","Vhai");
echo "<pre>";
print_r($arr);
echo "</pre>";

array_shift($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>