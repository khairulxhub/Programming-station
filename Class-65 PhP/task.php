<?php
$result="";

if(isset($_POST['submit'])){
    $num = $_POST['number'];
    $fact=1;
    $output="";
    for($i=$num; $i>=1; $i--){
        $fact = $fact * $i;
        $output = $output . $fact . " ";

        if($i<$result){
            $output = $output . " X ";
        }
    }

  $result = $output . "= " . "The factorial of $result is $fact";

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
    <h2> MY TASK</h2>
    <form action="" method="POST">
        <input type="number" name="number" value="number">
    <button type="submit" value="Submit" name="submit">Submit</button>
    </form>
    <h2><?php echo $result; ?></h2>
</body>
</html>