<?php
echo isset($_POST['name']) ? $_POST['name'] : "Username not set";
echo "<br>";
echo $_POST['email'];
// echo $_POST['email'];

echo "<pre>";
print_r($_POST);
echo "</pre>";


?>

<h1>You have submitted</h1>