<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Factorial Number </title>
</head>
<body>
    <h2> Find factorial number </h2>

    <form action="" method="POST">

    <Label>Enter a Number </Label>
    <input type="number" name="number">
    <input type="submit" name="check" value="CalCulate">
    </form>

    <?php
    if(isset($_POST['check'])){
        $num = $_POST['number'];
        $fact = 1;
        if ($num<0){
            echo "Factorial is not defined for negative number ";
        }
        else {
            for ($i =1; $i <=$num; $i++){
               $fact= $fact * $i;
            }

            echo "Factorial of $num is: $fact";
        }
    }
    ?>
</body>
</html>