<!DOCTYPE html>
<html>
<head>
    <title>PHP Tasks</title>
</head>
<body>

<h2>PHP Tasks Form</h2>

<form method="post">
    <!-- Factorial Input -->
    Enter a number for factorial:
    <input type="number" name="number" required>
    <br><br>

    <!-- Grade Input -->
    Enter Grade (A, B, C, D, F):
    <input type="text" name="grade" maxlength="1" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])) {

    // 1. Factorial
    $num = $_POST['number'];
    $fact = 1;

    for($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }

    echo "<h3>Factorial of $num is: $fact</h3>";

    // 2. Associative Array
    $countries = array(
        "Bangladesh" => "Dhaka",
        "India" => "New Delhi",
        "USA" => "Washington D.C.",
        "Japan" => "Tokyo",
        "Canada" => "Ottawa"
    );

    ksort($countries); // Sort by country name

    echo "<h3>Sorted Country-Capital List:</h3>";
    foreach($countries as $country => $capital) {
        echo "$country : $capital <br>";
    }

    // 3. Grade Evaluation
    $grade = strtoupper($_POST['grade']);

    echo "<h3>Grade Result:</h3>";

    if($grade == "A") {
        echo "Excellent";
    } elseif($grade == "B") {
        echo "Good";
    } elseif($grade == "C") {
        echo "Fair";
    } elseif($grade == "D") {
        echo "Poor";
    } elseif($grade == "F") {
        echo "Failure";
    } else {
        echo "Invalid Grade";
    }
}
?>

</body>
</html>