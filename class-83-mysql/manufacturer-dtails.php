<?php
require_once "db-config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM manufactures WHERE id = $id");
    if ($result) {
        $mfg_details = $result->fetch_assoc();
        echo "<pre>";
        print_r($mfg_details);
        echo "</pre>";
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
    
    <h3>Manufacturer Details</h3>


    <?php
    if (isset($mfg_details)):
    ?>
        <p><b>ID:</b> <?php echo $mfg_details['id']; ?></p>
        <p><b>Name:</b> <?php echo $mfg_details['name']; ?></p>
        <p><b>Address:</b> <?php echo $mfg_details['address']; ?></p>
        <p><b>is_active:</b> <?php echo $mfg_details['is_active']; ?></p>
    <?php
    else: echo "Manufacturer not found";
    endif;
    ?>



</body>

</html>