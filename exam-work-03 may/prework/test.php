<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation Form</h2>

<form method="POST">
    Enter Email:
    <input type="text" name="email" required>
    <input type="submit" name="check" value="Validate">
</form>

<?php
if(isset($_POST['check'])){

    $email = $_POST['email'];
    $valid = true;
    $message = "";

    // Rule 1: check @ symbol
    if(strpos($email, "@") === false){
        $valid = false;
        $message = "Email must contain @ symbol";
    }

    // Rule 2: check domain ending
    $allowed_endings = array(".com", ".org", ".net");

    $endsValid = false;
    foreach($allowed_endings as $end){
        if(substr($email, -strlen($end)) === $end){
            $endsValid = true;
            break;
        }
    }

    if(!$endsValid){
        $valid = false;
        $message = "Email must end with .com, .org, or .net";
    }

    // Output
    if($valid){
        echo "<h3 style='color:green;'>Valid Email ✔</h3>";
    } else {
        echo "<h3 style='color:red;'>Invalid Email ✖</h3>";
        echo "<p>$message</p>";
    }
}
?>

</body>
</html>