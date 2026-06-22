<?php
require_once("dbb.php");
$result = $db->query("SELECT p.*, m.name as mfg from products as p, manufacturerr as m where p.manufacture_id = m.id");
if($result){
 $rows = $result->fetch_all(MYSQLI_ASSOC);


$view_result = $db->query("select * from vw_product_list");
$view_rows = $view_result->fetch_all(MYSQLI_ASSOC);
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
        <a href="manufacturerr.php">Manufacturer</a>
        <a href="productr.php">Products</a>
    </nav>

   <h1> View Products more than TK.5000  </h1> 
   <table border="1" width="100%" cellspacing="0" cellpadding="10">
     <tr>
         <th> ID</th>
         <th> NAME</th>
         <th> mfg</th>
         <th> price</th>
         
     </tr>

     <?php foreach($view_rows as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['mfg']; ?></td>
            <td><?php echo $item['price']; ?></td>
            
        </tr>
     <?php endforeach; ?>
    </table>  
    <br> <br>
    <h1>Products List</h1> 
    <table border="1" width="100%" cellspacing="0" cellpadding="10">
     <tr>
         <th> ID</th>
         <th> NAME</th>
         <th> mfg</th>
         <th> price</th>
         
     </tr>

     <?php foreach($rows as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['mfg']; ?></td>
            <td><?php echo $item['price']; ?></td>
            
        </tr>
     <?php endforeach; ?>
    </table>
</body>
</html>