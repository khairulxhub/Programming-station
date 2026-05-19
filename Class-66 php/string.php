<?php
$str = "Hello World! Khairul "; 
echo strlen($str); 
echo "<br>";



echo substr($str, 6,5 );
echo "<br>";
var_dump(strpos($str, 'A'));
echo "<br>";
echo str_replace("World", "Dunia",  $str);
echo "<br>";
echo str_ireplace("world", "Sabbah" , $str);
echo "<br>";
echo strrev($str);
echo "<br>";
echo strtoupper($str);
echo "<br>";
echo strtolower($str);
echo "<br>";
echo ucfirst($str);
echo "<br>";
echo ucwords($str);
echo "<br>";
var_dump(stripos($str, 'h'));
echo "<br>";


$html = htmlspecialchars ( "<h1 style='font-size:3000px' >Hello 😼😼😼😼 World</h1>");
// $html = htmlentities ( "<h1 style='font-size:3000px' >Hello World</h1>");
 
echo $html;



?>