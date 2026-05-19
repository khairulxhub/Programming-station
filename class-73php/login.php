<?php
session_start();
// $_SESSION['username'] = 1;
// unset($_SESSION['username']);

if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
} 
$pass="1234";
$hash_Pass=password_hash($pass, PASSWORD_DEFAULT);
if(isset($_POST['login'])) {
    if(password_verify($_POST['password'], $hash_Pass)) {
        $_SESSION['username'] = 1;
        header("Location: dashboard.php");
    }else{
        $error = "パスワードが間違っています。";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body{
        text-align: center;
    }
</style>

<body>

    <nav>
        <a href="dashboard.php">Dashboard</a> |
        <a href="login.php">Login</a> |
        <a href="report.php">Report</a> |
    </nav>
    <h2>Login</h2>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password"> <br> <br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php if(isset($error)) { echo $error; } ?>
</body>

</html>