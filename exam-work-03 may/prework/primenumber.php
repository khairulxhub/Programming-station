<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Prime Number </title>
</head>
<body>
    <h2>Check Prime Number</h2>
    <form action="" method="POST">
        <label for=""> Enter a Number:</label>
        <input type="number" name="number" require> 
        <input type="submit" name="check" value="check" require> 
    </form>
    <?php
    if(isset($_POST['check'])){
        $num = $_POST['number'];
        $isPrime = true;

        if ($num <= 1){
            $isPrime = false;
        } else {
            for($i = 2; $i <= sqrt($num); $i++){
                if($num % $i == 0 ){
                    $isPrime = false;
                    break ;
                }
            }
        }
        if($isPrime){
            echo "<h3> $num is a Prime Number </h3>";
        } else {
            echo "<h3> $num is NOT a Prime Number </h3>";
        }
    }




?>
</body>
</html>