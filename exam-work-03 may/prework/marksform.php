<!DOCTYPE html>
<html>
<head>
    <title>Grade Check</title>
</head>
<body>

<h2>Check Your Grade</h2>

<form method="POST">
    <label>Enter Marks:</label>
    <input type="number" name="marks" required>
    <input type="submit" name="check" value="Check">
</form>

<?php
if(isset($_POST['check'])){

    $marks = $_POST['marks'];

    if ($marks >= 80 && $marks <= 100){
        $grade = "A";
        $result = "Excellent";
    } 
    else if ($marks >= 70){
        $grade = "B";
        $result = "Good";
    }
    else if ($marks >= 60){
        $grade = "C";
        $result = "Fair";
    }
    else if ($marks >= 50){
        $grade = "D";
        $result = "Poor";
    } 
    else if ($marks >= 0){
        $grade = "F";
        $result = "Failure";
    } 
    else{
        $grade = "Invalid";
        $result = "Invalid marks entered";
    }

    echo "<h3>Marks: $marks</h3>";
    echo "<h3>Grade: $grade</h3>";
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>