<?php
require_once "user-class.php";

$user = new User("Raju", 23);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Info</h1>

    <h3>Age: <?php echo $user->age; ?></h3>
    <?php $user->checkAge(); ?>
</body>
</html>


