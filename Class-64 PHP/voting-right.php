<?php
require_once "child-class.php";
$user = new User("Raju", "jane@jane.com", 14); //create user



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voting Right</h1>
    <
    <h3>Age: <?php echo $user->age; ?></h3>
    <?php $user->checkAge(); ?>
</body>
</html>