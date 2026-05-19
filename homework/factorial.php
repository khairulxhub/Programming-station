<!DOCTYPE html>
<html>
<head>
    <title>Factorial Output</title>
</head>
<body>

<h2>Factorial Calculator</h2>

<form method="post">
    Enter number:
    <input type="number" name="num" required>
    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = (int)$_POST["num"];
    $fact = 1;
    $output = "";

    if ($num < 1) {
        echo "Please enter a positive number.";
    } else {
        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
            $output .= $i;
            if ($i < $num) {
                $output .= "P";
            }
        }
        echo "<h3>$output=$fact</h3>";
    }
}
?>

</body>
</html>  0