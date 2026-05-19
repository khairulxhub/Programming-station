<?php
$countries = array(
    "Bangladesh" => "Dhaka",
    "Pakistan" => "Islamabad",
    "Nepal" => "Kathmandu",
    "Srilanka" => "Colombo",
    "Bhutan" => "Thimphu",
);
ksort($countries); 
echo "<pre>";
print_r($countries);
echo "</pre>";

foreach ($countries as $key => $value) {
    echo $key . " ==> " . $value . "<br>";
}

?>