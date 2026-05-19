<?php

// $file = fopen("file.csv" , "a+");
// fputcsv($file,["101","Sabbir", "Bangladesh"]);
// fclose($file);

$file = fopen("file.csv", "r");
// print_r(fgetcsv($file));
// print_r(fgetcsv($file));
// print_r(fgetcsv($file));
// print_r(fgetcsv($file));
// var_dump(feof($file));
while ($row = fgetcsv($file)) {
    echo "ID: {$row[0]}<br>";
    echo "Name: {$row[1]}<br>";
    echo "Country: {$row[2]}<br>";
    echo "<hr>";
}
// fputcsv($file,["101","Sabbir", "Bangladesh"]);
fclose($file);


?>


