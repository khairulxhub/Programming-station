<?php
// $file = fopen("file.txt" , "r+");
// while(!feof($file)) {
//     echo fgets($file);
// }
// fwrite($file , "Hello world BAngladeshi i am sabbir.");
// fclose($file);
// $file = fopen("file.txt" , "r+");
// echo fgets($file);
// fwrite($file , "I am Done ! ");
// fclose($file);


$file = fopen("file.txt" , "a+");
fwrite($file , "I am Done ! \n");
fclose($file);

?>