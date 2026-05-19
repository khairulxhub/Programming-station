<?php
require 'files/student.php';
$students = Student::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
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
    <h3>Student List</h3>
    <table border="1" width="400">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
        </tr>

        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?= $student->id ?></td>
                <td><?= $student->name ?></td>
                <td><?= $student->batch ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>