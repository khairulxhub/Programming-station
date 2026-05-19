<?php
$countries = array(
    "Bangladesh" => "Dhaka",
    "Japan" => "Tokyo",
    "Canada" => "Ottawa",
    "Australia" => " Canberra",
    "Pakistan"  => "Islamabad",
);
ksort($countries);

echo "<h3>Sorted By Country Name:</h3>";

foreach($countries as $country => $capital){
    echo $country. ":" . $capital . "<br>";
}




?>