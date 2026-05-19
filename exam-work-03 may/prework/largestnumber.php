<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest & Lowest  Number </title>
</head>
<body>
    <h2>Find largest & Lowest Number </h2>
    <form action="" method="POST">
     <label for=""> Number 1: </label>
     <input type="number" name="n1" require> <br> <br>
     <label for=""> Number 2: </label>
     <input type="number" name="n2" require> <br> <br>
     <label for=""> Number 3: </label>
     <input type="number" name="n3" require> <br> <br>
     <label for=""> Number 4: </label>
     <input type="number" name="n4" require> <br> <br>
     <label for=""> Number 5: </label>
     <input type="number" name="n5" require> <br> <br>


     <input type="submit" name="check" value="Result">
    </form>

    <?php
    if (isset($_POST['check'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $n5 = $_POST['n5'];

        $largest = $n1;
        $lowest = $n1;

        if($n2 > $largest){
            $largest = $n3;
        }
        if($n3 > $largest){
            $largest = $n2;
        }
        if($n4 > $largest){
            $largest = $n4;
        }
        if($n5 > $largest){
            $largest = $n5;
        }
        
        if($n2 < $largest){
            $largest = $n3;
        }
        if($n3 < $largest){
            $largest = $n2;
        }
        if($n4 < $largest){
            $largest = $n4;
        }
        if($n5 < $largest){
            $largest = $n5;
        }
        
        echo "<h2> Largest Number is: $largest</h2>";
        echo "<h2> Largest Number is: $lowest</h2>";

    }


?>
</body>
</html>