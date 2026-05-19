<?php
class User {
    public $name;
    public $age;
    protected $address="Dhaka";
    protected $password="1234";
    static $country="Bangladesh";

     public function __construct($_name, $_age){
        $this->name = $_name;
        $this->age = $_age;
    }
    function test(){
        echo "Test from Parent Class <br>";
        echo "Password:" . $this->password . " <br>";
    }
    static function checkAge($_age=0){
        if($_age >= 18){
            return "You are eligible for voting";
            
        }
        else{

            return "You are not eligible for voting";
        }
        
    }
    final function action(){
            echo "<h2>Final Method</h2>";
        }

}
class Trainee extends User {
    public $course;
    public $year;

    public function __construct($course, $year, $name, $age) {
        parent::__construct($name, $age);
        $this->course = $course;
        $this->year = $year;
    }
     function test(){
        echo "Test from Parent Class <br>";
    }
    
    public function info(){
        echo "Name:" . $this->name . " <br>";
        echo "Course:" . $this->course . " <br>";
        echo "Year:" . $this->year . " <br>";
        echo "Age:" . $this->age . " <br>";
    
    }   
}
$user = new User("Raju", 23);
echo $user->age;
// $user->password;
$trainee = new Trainee("PHP", 2021, "Raju",  23);
$user->test();
$trainee->info();

echo User::checkAge(29);
echo "<br>";
echo User::$country;


?>