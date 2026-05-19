<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Score Highlight</title>
</head>
<body>
    <h2>Top Score Highlight</h2>
    <?php
 $students=[

    "khairul" => 67,
    "Sabbir" => 57,
    "Eimrul" => 77,
    "Mohammad" => 97,
    "Islam" => 87,
 ];

 $max = 0;
 $max_name = "";
 foreach($students as $name => $score){
    if($score > $max){
        $max = $score;
        $max_name = $name;
    }
 }
 echo "<h3>Top Score: $max_name</h3>";

?>
</body>
</html>