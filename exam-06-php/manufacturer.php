<?php
require_once "db.php";

if(isset($_POST['add_mfg'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $db->query("call addManufacturer('$name','$address','$contact_no')");
    

}

if(isset($_POST['delete_mfg'])){
    $id = $_POST['delete_id'];
    $db->query("delete from manufacturer where id = $id");
}

$result = $db->query("select * from manufacturer");
$rows = $result->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// print_r($rows);
// echo "</pre>";

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
    <th>Id</th>
    <th> Name</th>
    <th>Address</th>
    <th>Contact_no</th>
    <th>Action</th>
   </tr>
  <?php foreach($rows as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['contact_no']; ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $item['id']; ?>">
                     <button type="submit" name="delete_mfg">Delete</button>
                </form>
              
            </td>
        </tr>
     <?php endforeach; ?>
    </table>
</body>
</html>