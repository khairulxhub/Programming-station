<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator </title>
</head>
<body>
    <h2>Grade Calculator </h2>
    <form action="" method="post">
        <label>Enter Your Name: <input type="number" name="marks"></label>
        <input type="submit" value="Submit">

    </form>

    <?php
if(isset($_POST['marks'])){
    $marks = $_POST['marks'];
    $grade = "";
    if($marks>=90) $grade = "A+";
    elseif($marks >=80) $grade = "A";
    elseif($marks >=70) $grade = "B";
    elseif($marks >=60) $grade = "C";
    else $grade = "Failed";
    echo "Your grade is $grade";
    
}

?>
</body>
</html>