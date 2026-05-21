<?php
// new mysqli(host,user,password,database)
// localhost,root,root,db_name
//$connection = new mysqli("localhost","root","root","db_name");


//local
// define('DB_HOST', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'round_70');

//Hosting
// define('DB_HOST', 'abc.com');
// define('DB_USERNAME', 'round_70');
// define('DB_PASSWORD', '2565656565');
// define('DB_NAME', 'round_70');

// $db= new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$db=new mysqli("localhost","root","","round_70");
if($db->connect_errno > 0){
    die('Unable to connect to database' . $db->connect_error );
// } else{
//     echo '<h2>Connected to database</h2>';
// }
}
?>