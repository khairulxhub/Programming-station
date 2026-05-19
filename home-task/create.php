<?php
require 'files/student.php';
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['batch'])) {
    $student = new Student($_POST['id'], $_POST['name'], $_POST['batch']); 
    $student->saveToCSV(); 

    echo 'Student saved successfully.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="create.php">New Student</a>
        | 
        <a href="list.php">Students List</a>
        | 
        <a href="search.php">Find Student</a>
    </nav>
    <h3>Add new student</h3>
    <form action="" method="post">
        <label for="id">ID</label><br>
        <input type="text" name="id" id="id"><br><br>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><br><br>
        <label for="batch">Batch</label><br>
        <input type="text" name="batch" id="batch"><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>