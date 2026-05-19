<?php
$msg = "";
$msg1 = "";
// $output = "";
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    // echo $num1 ."<br>";
    // echo $num2 ."<br>";
    // echo $num3 ."<br>";
    if($num1 > $num2 && $num1 > $num3) {
        $msg = $num1 . " is the largest number";
    } else if($num2 > $num1 && $num2 > $num3) {
        $msg = $num2 . " is the largest number";
    } else {
        $msg = $num3 . " is the largest number";
    }
    if($num1 < $num2 && $num1 < $num3) {
        $msg1 = $num1 . " is the smallest number";
    } else if($num2 < $num1 && $num2 < $num3) {
        $msg1 = $num2 . " is the smallest number";
    } else {
        $msg1 = $num3 . " is the smallest number";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="number" name="num3">
        <input type="submit" name="submit">
    </form>
    <h2><?= $msg ?></h2>
    <h2><?= $msg1 ?></h2>
</body>
</html>