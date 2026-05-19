<?php 
$students=[

"khairul" => 67,
"Sabbir" => 57,
"Eimrul" => 77,
"Mohammad" => 97,
"Islam" => 87,

];
function getGrade($score){
    if($score>=90) return "A+";
    elseif($score >=80) return "A";
    elseif($score >=70) return "B";
    elseif($score >=60) return "C";
    else return "Failed";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Table</title>
</head>
<body>
   
     <h2>Score Table </h2>
     <table border="1" cellpadding="10">
      <thead>
<th>SL No </th>
        <th>Name </th>
        <th> Score </th>
        <th>Grade </th>
    </thead>
     <tbody>
        
        <?php
        $sl=1;
       foreach($students as $name => $score){
        echo "<tr>
        <td>$sl</td>
        <td>$name</td>
        <td>$score</td>
        <td>getGrade($score)</td>
        </tr>" ;
         $sl++;
       }
      
        ?>
     </tbody>
        
     </table>
</body>
</html>