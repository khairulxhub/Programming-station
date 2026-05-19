<?php 
 $arr = [1,2,3,4,5,6,7,8,9,10];
 echo "<pre>";
 print_r($arr);
 echo "</pre>";

 echo "<pre>";
 print_r(array_slice($arr, 2, 5));
 echo "</pre>";
 
 array_splice($arr, 9,0,[11]);
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
 
//array slice and splice
?>