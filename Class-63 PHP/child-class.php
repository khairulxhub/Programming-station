    <?php
    class User
    {
        public $name;
        public $email;
        public function __construct($_name, $_email)
        {
            $this->name = $_name;
            $this->email = $_email;
        }
        public function test()
        {
            echo "Test from Parent Class <br>";
        }
    }
    class Trainee extends User
    {
        public $course;
        public $year;
        public function __construct($_course, $_year, $_name, $_email)
        {
            parent::__construct($_name, $_email);
            $this->course = $_course;
            $this->year = $_year;
        }
        public function info()
        {
            echo "Name:" . $this->name . " <br>";
            echo "Email:" . $this->email . " <br>";
            echo "Course:" . $this->course . " <br>";
            echo "Year:" . $this->year . " <br>";
        }
    }
    $traineeUser = new Trainee("PHP", "2021", "Raju", "jane@jane.com");
    $traineeUser->info();
    $traineeUser->test();
    // echo "<pre>";
    // print_r($traineeUser);
    // echo "</pre>";
    // echo "Name:" . $traineeUser->name. "<br>";
    // echo "Email:". $traineeUser->email .  "<br>";
    // echo "Course:" . $traineeUser->course .  "<br>";
    // echo "Year:" . $traineeUser->year; 

    ?>