<?php
require_once "data.php";

        $sql = "select c. *,t.name as mfg
        from course c , teacher t
        where c.teacher_id = t.id;";

$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
// print_r($rows);

$result_view=$db->query("select * from vw_course");
$rows_view=$result_view->fetch_all(MYSQLI_ASSOC);
// print_r($rows_view);
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

    <h2>Course View Where fee is greater than 15000 </h2>
    <table border="1" width="500">
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Fee</th>
            <th>mfg</th>
        </tr>
       


        <?php foreach ($rows_view as $item): ?>
            <tr>
                <td><?php echo $item["id"]; ?></td>
                <td><?php echo $item["course_name"]; ?></td>
                <td><?php echo $item["fee"]; ?></td>
                <td><?php echo $item["mfg"]; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
           
  
    <h2>Course List </h2>
    <table border="1" width="500">
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Fee</th>
            <th>teacher_id</th>
        </tr>
       


        <?php foreach ($rows as $item): ?>
            <tr>
                <td><?php echo $item["id"]; ?></td>
                <td><?php echo $item["course_name"]; ?></td>
                <td><?php echo $item["fee"]; ?></td>
                <td><?php echo $item["teacher_id"]; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
           
</body>
</html>