<?php
$msg = "";
// $grade = readline("Enter your grade: ");
if (isset($_POST['submit'])) {
    $grade = strtoupper($_POST['grade']);


    // $grade = "A";
    if ($grade == "A") {
        echo "Excellent";
    } else if ($grade == "B") {
        echo "Good";
    } else if ($grade == "C") {
        echo "Fair";
    } elseif ($grade == "D") {
        echo "Poor";
    } else {
        echo "Failure";
    }
}


?>

<body>
    <form action="" method="POST">
        <input type="text" name="grade">
        <input type="submit" value="Submit">
        <h2>
            <?php echo $msg; ?>
        </h2>
    </form>

</body>