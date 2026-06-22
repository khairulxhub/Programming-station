<?php 
require_once "db-config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM manufactures WHERE id = $id");
    if ($result) {
        $mfg_details = $result->fetch_assoc();
        // echo "<pre>";
        // print_r($mfg_details);
        // echo "</pre>";
    }
    if(isset($_POST['update_mfg'])) {
       $name = $_POST['name'];
        $address = $_POST['address'];
        $is_active = isset($_POST['active']) ? 1 : 0;

        $db->query("UPDATE manufactures SET name = '$name', address = '$address', is_active = $is_active WHERE id = $id");
     if($result) {
        header("Location: manufacturer.php");
     } else{
        echo $db->error;
     }
        
    }
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
        <ul>
        <a href="manufacturer.php">Manufacturer</a> |
        <a href="products.php">Product</a>
    </ul>
    <h3>Manufacturer Edit</h3>
    <?php 
    if(isset($mfg_details)):
        ?>
     <form action="" method="post">

                    <label for="name">Name:</label> <br>
                    <input type="text" name="name" id="name" value="<?=$mfg_details['name'] ?>"> <br>
                    <br>
                    <label for="address">Address:</label> <br>
                    <textarea name="address" id="address"> <?=$mfg_details['address'] ?></textarea>
                    <br>
                    <br>
                    <input type="checkbox" name="active" id="active" <?=$mfg_details['is_active'] ? 'checked' : '' ?>>
                    <label for="active">Is active</label>
                    <br>
                    <button type="submit" name="update_mfg">Update</button>
                </form>

    <?php
    else:
        echo "Manufacturer not found";
        
     endif; 
    
    ?>
</body>
</html>