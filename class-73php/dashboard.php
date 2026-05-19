<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
} 
if(isset($_POST['logout'])) {
    session_unset();
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <nav>
    <a href="dashboard.php">Dashboard</a> |
    <a href="login.php">Login</a> |
    <a href="report.php">Report</a> |
    <form action="" method="POST">
        <input type="submit" name="logout" value="Logout">
</form>
</nav>
<h2>Dashboard</h2>
</body>
</html>