<?php
$pass ="123";
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
// echo $hashed_pass;
echo "<br>";

if(password_verify($pass, $hashed_pass)){
    echo "Password Matched";
}else{
    echo "Password Not Matched";
}
// echo password_hash($pass, PASSWORD_DEFAULT);
?>

