<?php
require_once("db.php");
if(isset($_POST['add_mfg'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    //echo $name . $address;
    $db->query("call createManufacturer('$name', '$address')");
   
}

if(isset($_POST['delete_mfg'])){
    $id = $_POST['id'];
    $db->query("delete from manufactures where id =($id)");
}


$result = $db->query("SELECT * FROM manufactures order by id desc");
if($result){
 $rows = $result->fetch_all(MYSQLI_ASSOC);

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
    <nav>
        <a href="manufacturer.php">Manufacturer</a> 
        <a href="products.php">Products</a>
    </nav>
   <h1>Add New Manufacturer</h1>
   <form action="" method="post">
    <label>Name:</label> <br>
       <input type="text" name="name" >  <br>
       <label for="">Address:</label> <br> 
       <input type="text" name="address" > <br>
       <input type="submit" value="Add Manufacturer" name="add_mfg"> <br> <br>
   </form>


    <h1>Manufacturer List</h1> 
    <table border="1" width="100%" cellspacing="0" cellpadding="10">
     <tr>        
         <th> ID</th>
         <th> Name</th>
         <th> Adress</th>
         <th> Action</th>
     </tr>

     <?php foreach($rows as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                     <button type="submit" name="delete_mfg">Delete</button>
                </form>
              
            </td>
        </tr>
     <?php endforeach; ?>
    </table>
</body>
</html>