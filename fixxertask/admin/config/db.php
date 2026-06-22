<?php

//localhost
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ecom');

//hosting
// define('DB_HOST', 'localhost');
// define('DB_USER', 'khairul');
// define('DB_PASS', '222766');
// define('DB_NAME', 'ecom');

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>