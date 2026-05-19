<?php
if (isset($_POST['submit'])) {
    $skills = $_POST['check'] ?? [];
    $num = count($skills);

    if($num < 1) {
        echo "<span style='color:red'>You need to select at least one skills";
    } else{
        echo "You  selected " . $num . " skills". ($num > 1 ? "s" : "");
    }
    // echo "<pre>";
    // print_r($_POST['check']);
    // echo "</pre>";
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
    <form action="" method="POST">
        <input type="checkbox" name="check[]" value="1">First <br>
        <input type="checkbox" name="check[]"  value="2">Second <br>
        <input type="checkbox" name="check[]" value="3">Third <br>
        <input type="checkbox" name="check[]" value="4">Four <br> 
        <input type="checkbox" name="check[]" value="5">Five <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>