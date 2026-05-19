<?php
$email = "";
if (isset($_POST['submit'])) {
   $email = $_POST['email'];

    echo $_POST['name'];
    echo "<br>";
    echo $_POST['email'];


    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        <label>UserName</label> <br>
        <input type="text" name="name" id="name" value="<?=  isset($_POST['name']) ? $_POST['name'] :  "";  ?>"> <br>

        <label>Email</label> <br>
        <input type="text" name="email" id="name" value="<?=  $email;  ?>"> <br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>

</html>