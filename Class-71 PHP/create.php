<?php
require_once("student.php");
if(isset($_POST['add_student'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];
//    echo "ID: $id <br>";
//    echo "Name: $name <br>";
//    echo "Batch: $batch <br>";
$s = new student( $id, $name, $batch);
$msg = $s->save();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create a student Data</title>
</head>
<body>

    <nav>
    <a href="create.php">Create Data</a> |
    <a href="list.php">List</a> |
    <a href="search.php"> Find Student</a>
</nav>
    <h2>Create a student Data</h2>
    <h1 style="color: green ;"> <?php echo $msg ?? ""; ?></h1>
    <form action="" method="POST">
        <label for="id">ID</label>
        <input type="text" name="id" id="id"><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br>
        <label for="batch">Batch</label>
        <input type="text" name="batch" id="batch"><br>
        <button type="submit" name="add_student">Submit</button>
    </form>
</body>
</html>