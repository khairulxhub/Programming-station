<?php
require_once "data.php";

if(isset($_POST['add_teacher'])) {

    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $contact_no = $_POST['contact_no'];
    $db->query("call addTeacher('$name','$qualification','$contact_no')");
    

}
$db->query("SELECT * FROM teacher");
if(isset($_POST['delete_mfg'])) {
    $teacher_id = $_POST['id'];
    $db->query("delete from teacher where id =('$teacher_id')");
    
}

$result = $db->query("SELECT * FROM teacher");
$rows = $result->fetch_all(MYSQLI_ASSOC);
// print_r($rows);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<nav>
    <a href="teacher.php"> teacher</a>
    |
    <a href="course.php"> Course</a>
</nav>
    <h2>Add Teacher</h2>

    <form action="" method="post">
        Name: <br>
        <input type="text" name="name" placeholder="Enter name"> <br>
        Qualification: <br>
        <input type="text" name=" qualification" > <br>
        Contact_no: <br>
        <input type="text" name="contact_no" placeholder="Enter contact_no"> <br>
        <button type="submit" name="add_teacher">Add Teacher</button>
    </form>
    <h2>Teacher List </h2>
    <table border="1" width="500">
        <tr>
            <th>Teacher ID</th>
            <th>Teacher Name</th>
            <th>Teacher Qualification</th>
            <th>Teacher Contact_no</th>
            <th>Action</th>

        </tr>
       


        <?php foreach ($rows as $item): ?>
            <tr>
                <td><?php echo $item["id"]; ?></td>
                <td><?php echo $item["name"]; ?></td>
                <td><?php echo $item["qualification"]; ?></td>
                <td><?php echo $item["contact_no"]; ?></td>
                <form action="" method="POST">
                    <td>
                        <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
                        <button type="submit" name="delete_mfg">Delete</button>
                    </td>
                </form>
               
            </tr>
        <?php endforeach; ?>
        </table>
           
</body>
</html>