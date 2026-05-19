<?php
class traineeUser{
    public $id = "123456";
    public $number = "018777772223";



    public function user(){
     echo "Id:" . $this->id . "<br>";
     echo "Number:" . $this->number . "<br>";

}
}

$traineeUser = new traineeUser();
$traineeUser->user();
$traineeUser->number="0187772227666";
echo ("Your number is: " . $traineeUser->number . "<br>");





?>