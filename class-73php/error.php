<?php
// try {
//    if(isset($_GET["name"])){
//       echo $_GET["name"];
//    }else{
//       throw new Exception("名前が設定されていません");
//    }
// }catch( Exception $e) {
//     echo "Error";

// }finally{
//       echo " <br>finally";
// }

// function test (int $a, string $b) {
//     echo "test";
// }

error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');

echo "test"; 
?>