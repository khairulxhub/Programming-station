<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // $text = $_POST['   email'];
//     // echo "post method";
// } else {
//     // echo "get method";
// }
if(isset($_POST['form_email'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $reg_email = "/^[a-zA-Z0-9._]{3,30}[@]{1}[a-zA-Z0-9-]{3,20}[.]{1}[a-zA-Z.]{2,6}$/";


   if(empty($username)){
    $username_error = "Username is required";
   }elseif(strlen($username) < 4 || strlen($username) > 8){
    $username_error = "Username must be at Between 4 to 8  characters long";
   } elseif(strpos($username, "@") == false){
    $username_error = "Username must  contain @ sign";
   } else{
    $username_error = "";
   }
//    $reg_username = "/^[@]{1}[a-zA-Z0-9._]{3,30}$/";
//    $username_error = "";

//    if(strlen($username) === 0) {
//        $username_error = "Username is too long";
//    }
//    elseif(strlen($username) > 4) {
//        $username_error = "Username must be at least 4 characters long";
//    }
//    elseif(preg_match($reg_username, $username) === 0 ) {
//        $username_error ="Username is not valid. Must start with @ and be 3-30 chars.";
//    }
//    else{
//     $msg1= "Name Submitted Successfully";
//    }
//     if($username == "") {
//        $username_error = "Username is required";
//    }
//    if(preg_match($reg_username, $username) === 0 ) {
//        $username_error ="Username is not valid";
//    } else {
//        $username_error ="";
//    }
//    if($username_error == "") {
//        $msg1= "Name Submitted Successfully";
//    }
//    var_dump (preg_match($reg_email, $email));
   if(preg_match($reg_email, $email) === 0 ) {
       $email_error ="Email is not valid";
   } else {
       $email_error ="";
   }

   if($email_error == "" && $username_error == "") {
       $msg= "Form Submitted Successfully";
   }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email validation</title>
    <style>
        .error-text {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Form Validation</h2>
    <form action="" method="POST">

        <label for="">User Name:</label> <br>
        <input type="text" name="username" value="<?php echo $username ?? "mina"; ?>">  <br> <br> <br>
        <div class="error-text"> <?php echo $username_error ?? ""; ?></div> <br>

        <label for="">Email:</label> <br>
        <input type="text" name="email" value="<?php echo $email ?? "mina@gmail.com"; ?>">  <br> <br>
        <div class="error-text"><?php echo $email_error ?? ""; ?></div> <br>
       
        <button type="submit" name="form_email" value="submit">Submit</button>

        <h3><?php echo $msg ?? ""; ?></h3>
        <h2><?php echo $msg1 ?? ""; ?></h2>
    </form>
</body>

</html>