<?php
require_once("student.php");

if(isset($_POST['id']) ){
    // echo "ID: " . $_POST['id'];
    $id = $_POST['id'];
    $s = new student();
   $res = $s->result($id);
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Search</title>
</head>
<body>
    <nav>
    <a href="create.php">Create Data</a> |
    <a href="list.php">List</a> |
    <a href="search.php"> Find Student</a>
</nav>
    <h3>Student Search</h3>
    <form action="" method="POST">
        <label for="id">ID</label>
        <input type="text" name="id" id="id"><br>
        <button type="submit" name="search">Search</button>
    </form>
    <div>
        <?php
        echo $res ?? "";
        ?>
    </div>
</body>
</html>