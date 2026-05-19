<?php
class Person {
    // private $name;
    private $age;
//    public function __get($_pname){
//        return $this->$_pname;
//    }
//    public function __set($_pname , $_pvalue){
//        $this->$_pname = $_pvalue;
//    }
public function getAge(){
    return $this->age;
}
public function setAge($_age){
     $this->age = $_age;
}
}
$person = new Person();
$person->setAge(20000);
echo $person->getAge();

?>