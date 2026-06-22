<?php
require_once "db.php";
$sql = "
select p. *,m.name as mfg
from product p, manufacturer m 
where p.manufacturer_id = m.id
";
// $db->query();
$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

$result_view=$db->query("select * from vw_product");
$rows_view=$result_view->fetch_all(MYSQLI_ASSOC);
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
 <h2>Product view(more than 5000 tk )</h2>
    <table border="1" width="500">
   <tr>
    <th>Id</th>
    <th> Name</th>
    <th>Price</th>
    <th>MFG</th>
    
   </tr>
  <?php foreach($rows_view as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td><?php echo $item['mfg']; ?></td>
            
        </tr>
  <?php endforeach; ?>
  
    </table>

 <h2>Product List</h2>
    <table border="1" width="500">
   <tr>
    <th>Id</th>
    <th> Name</th>
    <th>Price</th>
    <th>MFG</th>
    
   </tr>
  <?php foreach($rows as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td><?php echo $item['mfg']; ?></td>
            
        </tr>
  <?php endforeach; ?>
  
    </table>
</body>
</html>