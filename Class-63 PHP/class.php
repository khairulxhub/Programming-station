<?php

class personInfo {
    public $name = "John";
    public $age = 35;
    // public $gender = "male";
    public function info() {
        echo "Name:". $this->name . " <br>";
        echo "Age:". $this->age . " <br>";
    }
}
$person = new personInfo();
$person->info();
$person->age;
$person->name = "Janennnnn";
echo $person->name;

$arr =[1,2,3];
echo "<pre>";
print_r($person);
print_r($arr);
echo "</pre>";

?>