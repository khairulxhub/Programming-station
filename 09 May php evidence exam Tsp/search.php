<?php
require "file/students.php";

if (isset($_POST['search'])) {
    $id = $_POST['id'];
    $student = new student($id);
    $msg = $student->result($id);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Id</title>
</head>
<body>
    <h2> Search Student ID </h2>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter ID">
        <input type="submit" name="search" value="Search">
    </form>
    
    <?php  if(isset($msg)) echo $msg; ?>
</body>
</html>