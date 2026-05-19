<?php
include("file2.php");
echo "After include<br>";
echo $name;
echo "<br>";
include_once("file1.php");
echo $age;
echo "<br>";
include_once("file1.php");



?>