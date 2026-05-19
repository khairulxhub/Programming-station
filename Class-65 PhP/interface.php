<?php
interface iTest{
    public function viewInfo();
    
}
interface iTest2{
    public function showText();
}
class childClass implements iTest, iTest2{
    public $name = "Mina";
    public $email = "vH2Ct@example.com";
    public function viewInfo(){
        echo "Name: $this->name <br> Email: $this->email <br>";
    }
    public function showText(){
        echo "Its a static text";
    }
}
$child = new childClass();
$child->viewInfo();
$child->showText();

?>