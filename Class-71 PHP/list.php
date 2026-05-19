<?php
require("student.php");
$s = new student();
$data= $s->showALL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
</head>
<body>
     <nav>
    <a href="create.php">Create Data</a> |
    <a href="list.php">List</a> |
    <a href="search.php"> Find Student</a>
</nav>
    <h2>Student Data</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
        </tr>
        <?php
     echo  $data ?? "";
        ?>
    </table>
</body>
</html>