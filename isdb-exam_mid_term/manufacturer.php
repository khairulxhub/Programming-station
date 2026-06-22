<?php
require_once('db.php');


if(isset($_POST['add_mfg'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $db->query("call addManufacturer('$name','$address','$contact_no')");
    
}
if(isset($_POST['delete_mfg'])){
    $id = $_POST['id'];
    $db->query("delete from manufacturer where id = $id");
}

        $sql = "SELECT * FROM manufacturer";
        $result = $db->query($sql);
        $rows = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav>
    <a href="manufacturer.php">Manufacturer</a> 
    |
    <a href="product.php">Product</a>
</nav> 

<h2>Add Manufacturer</h2>
<form action="" method="post">
        Name: <br>
        <input type="text" name="name" placeholder="Enter name"> <br>
        Address: <br>
        <input type="text" name="address" placeholder="Enter address"> <br>
        Contact_no: <br>
        <input type="text" name="contact_no" placeholder="Enter contact_no"> <br>
        <button type="submit" name="add_mfg">Add Manufacturer</button>
    </form>
    <h2>Manufacturer List</h2>
    <table border="1" width="500">
        <tr>
            <th>Manufacturer ID</th>
            <th>Manufacturer Name</th>
            <th>Manufacturer Address</th>
            <th>Manufacturer Contact</th>
            <th>Action </th>
        </tr>
        <?php foreach($rows as $item){ ?>
        <tr>
            <td><?=$item['id']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['address']?></td>
            <td><?=$item['contact_no']?></td>
            <form action="" method="post">
              <td>
                <input type="hidden" name="id" value="<?=$item['id']?>">
                <button type="submit" name="delete_mfg"> Delete</button>
                
            </td>
            </form>
            

        </tr>
        <?php } ?>
        
</body>
</html>