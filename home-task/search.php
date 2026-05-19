<?php
require 'files/student.php';
if (isset($_GET['id'])) {
    $student = Student::findByID($_GET['id']);
    // if ($student) {
    //     echo 'ID: ' . $student->id . '<br>';
    //     echo 'Name: ' . $student->name . '<br>';
    //     echo 'Batch: ' . $student->batch . '<br>';
    // } else {
    //     echo 'Student not found.';
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
    <h3>Find student by ID</h3>
    <form action="" method="get">
        <input type="search" name="id" id="id">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($student)) { ?>
        <h3>Student found</h3>
        ID: <?php echo $student->id; ?><br>
        Name: <?php echo $student->name; ?><br>
        Batch: <?php echo $student->batch; ?><br>
    <?php } else { ?>
        <h3>Student not found</h3>
    <?php } ?>
</body>
</html>