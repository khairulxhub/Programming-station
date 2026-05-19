<?php
class User{
    public $name;
    public $age;
    public function __construct($_name, $_age){
        $this->name = $_name;
        $this->age = $_age;
    }
    public function checkAge(){
        if($this->age>18){
            echo "You are eligible for voting";
        }
        else{
            echo "You are not eligible for voting";
        }
    }
    function test(){
        echo "Test from Parent Class <br>";
    }
}

?>