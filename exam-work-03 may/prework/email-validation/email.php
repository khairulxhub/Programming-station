<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation</h2>

<form method="POST">
    <label>Enter Email:</label>
    <input type="text" name="email" required>
    <input type="submit" name="check" value="Validate">
</form>

<?php
if (isset($_POST['check'])) {

    $email = $_POST['email'];
    $valid = true;
    $msg = "";

    // Rule 1: @ check
    if (strpos($email, "@") === false) {
        $valid = false;
        $msg = "Email must contain @ symbol";
    }

    // Rule 2: ending check
    $allowed_endings = array(".com", ".org", ".net");

    $endValid = false;

    foreach ($allowed_endings as $end) {
        if (substr($email, -strlen($end)) === $end) {
            $endValid = true;
            break;
        }
    }

    if (!$endValid) {
        $valid = false;
        $msg = "Email must end with .com, .org, or .net";
    }

    // Output
    if ($valid) {
        echo "<h3 style='color:green;'>Valid Email</h3>";
    } else {
        echo "<h3 style='color:red;'>Invalid Email</h3>";
        echo "<p>$msg</p>";
    }
}
?>

</body>
</html>