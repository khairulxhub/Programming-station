<?php
$arr = ["cat.jpg","zoo.jpg","Dog.jpg","Apple.jpg","Gun2221.jpg"];

echo "<pre>";
print_r($arr);
echo "</pre>";
natsort($arr); //sort in ascending order
echo "<pre>";
print_r($arr);
echo "</pre>";

natcasesort($arr); //sort in ascending order
echo "<pre>";
print_r($arr);
echo "</pre>";


?>