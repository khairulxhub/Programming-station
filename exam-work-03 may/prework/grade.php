<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grzade check </title>
</head>
<body>
    <h2>Check Your Grade </h2>

    <form action="" method="POST">
        <label for=""> Enter Grade</label>
        <input type="text" name="grade" required>
        <input type="submit" name="check" value="check">
    </form>

    <?php
if(isset($_POST['check'])){
    // $grade = strtoupper($_POST['grade']);
$grade = $_POST['grade'];
if ($grade >= 80 && $grade <= 100){
    $marks = "A";
    $result = "Excellent";
} 
else if ($grade >= 70){
    $mark = "B";
    $result = "Good";
}
else if ($grade >= 60){
    $mark = "C";
    $result = "Fair";
}
else if ($grade >= 50){
    $mark = "D";
    $result = "Poor";
} else{
    $mark = "InValid";
    $result = "Invalid marks Entered ";
}

echo "<h3> Grade: $grade</h3>";
// echo "<h3> Marks: $mark</h3>";
echo "<h3> Marks: $result</h3>";
    // if ($grade == "A"){
    //     echo "Excellent";
    // } elseif ($grade == "B"){
    //     echo "Good";
    // }elseif ($grade == "C"){
    //     echo "Fair";
    // }elseif ($grade == "D"){
    //     echo "Poor";
    // } else {
    //     echo "Invalid Grade Entered ";
    // }
}
 


?>
</body>
</html>