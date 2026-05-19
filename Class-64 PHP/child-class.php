    <?php
    class User
    {
        public $name;
        public $email;
        public $age;
        public function __construct($_name, $_email , $_age)
        {
            $this->name = $_name;
            $this->email = $_email;
            $this->age = $_age;
        }
        public function test()
        {
            echo "Test from Parent Class <br>";
        }
        public function checkAge(){
            if($this->age > 18){
                echo "You are eligible for voting";
            }
            else{
                echo "You are not eligible for voting";
            }
        }
    }
    class Trainee extends User
    {
        public $course;
        public $year;
        public function __construct($_course, $_year, $_name, $_email, $_age)
        {
            parent::__construct($_name, $_email , $_age);
            $this->course = $_course;
            $this->year = $_year;
            $this->age = $_age;
        }
        public function info()
        {
            echo "Name:" . $this->name . " <br>";
            echo "Email:" . $this->email . " <br>";
            echo "Course:" . $this->course . " <br>";
            echo "Year:" . $this->year . " <br>";
            echo "Age:" . $this->age . " <br>";
        }
        
    }
  class Academy extends Trainee
{
    public $session;

    public function __construct($_session, $_course, $_year, $_name, $_email, $_age)
    {
        parent::__construct($_course, $_year, $_name, $_email, $_age);
        $this->session = $_session;
    }
}

    $traineeUser = new Trainee("PHP", "2021", "Raju", " 23", "jane@jane.com");
    $traineeUser->info();
    $traineeUser->test();
    echo"----------" .$traineeUser->email . "<br>";
    // echo "<pre>";
    // print_r($traineeUser);
    // echo "</pre>";
    // echo "Name:" . $traineeUser->name. "<br>";
    // echo "Email:". $traineeUser->email .  "<br>";
    // echo "Course:" . $traineeUser->course .  "<br>";
    // echo "Year:" . $traineeUser->year; 

    // $academy = new Academy( "2021", "PHP", "2021", "Raju", "jane@jane.com");
   $academy = new Academy("2021", "PHP", "2021", "Raju", "jane@jane.com", 23);
    $academy->info();
    $academy->test();
    echo "----------" .$academy->session . "<br>";
     $user = new User("Sabbir", "23","janalame@jane.com");
    $user->test();
    echo "----------" .$user->name . "<br>";
    echo "----------" .$user->email . "<br>";
    
    ?>