<?php
if(isset($_POST['submit'])){
    $n = $_POST['n'];
    $factorial = 1;
    for($i=1; $i<=$n; $i++){
        $factorial = $factorial * $i;
    }
    $meg= "The factorial of $n is $factorial";
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
  <h2>Factorial</h2>
  <form action="" method="POST">
    <input type="number" name="n">
    <!-- <input type="submit" value="Submit"> -->
     <button type="submit" name="submit">Submit</button>

    
  </form>  
  <h1><?php echo $meg ?? ''; ?></h1>
</body>
</html>