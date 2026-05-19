<?php
// User defined / custom sort 
$arr = ["Dog","Apple","pencil","ball","Gun"];

echo "<pre>";
print_r($arr);
echo "</pre>";

usort($arr,function($a,$b){
    return strlen($b) - strlen($a);
});
echo "<pre>";
print_r($arr);
echo "</pre>";


?>