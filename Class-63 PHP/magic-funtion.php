<?php
class User{
    public $name;
    public $email;
    public function __construct($_name, $_email){
        $this->name = $_name;
        $this->email = $_email;
        echo "Constructor Called <br>;"; 
    }
    
    function __toString(){
        echo "string Called";
        return $this->name . "<br>" . $this->email;
    }
    function __destruct(){
        echo "Destruced Called "; 
        // echo "Bye";
    }
    function test(){
        echo "Hello";
    }
}
$user = new User("Janen", "jane@jane.com");
// echo $user;
// unset($user);
// echo $user->name;
// echo "<br>";
// echo $user->email;
// echo "<br>";
// $user->test();


?>