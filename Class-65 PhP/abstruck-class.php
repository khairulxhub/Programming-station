<?php
abstract class Test{
    public $name="Sabbir Hasan Niloy";
    public function getName(){
        return $this->name . "<br>";
    }
    abstract public function getAge();
    abstract public function viewDetails();
    
}
class Person extends Test{
    public $age=20;
    public function getAge(){
        return $this->age . "<br>";
    }
    public function viewDetails(){
        return $this->getName() . $this->getAge();
    }
}
$person = new Person();
$person->getAge();
$person->viewDetails();

// echo $person->getAge();

echo $person->viewDetails();
?>