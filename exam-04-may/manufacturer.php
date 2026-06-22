<?php
require_once "dbb.php";
if(isset($_POST['add_mfg'])){
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
   
    $db->query("call createManufacturerr('$name', '$contact_no')");
   
}

if(isset($_POST['delete_mfg'])){
    $id = $_POST['id'];
    $db->query("delete from  manufacturerr where id =$id");
}


$result = $db->query("SELECT * FROM  manufacturerr order by id desc");
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
    <h1>Add Manufacturer </h1>
    <nav>
        <ul>
            <a href=" manufacturerr.php">Manufacturer</a>
            <a href="productr.php">Product</a>
        </ul>
    </nav>
     <form action="" method="post">
    <label>Name:</label> <br>
       <input type="text" name="name" >  <br>
       <label for="">contact_no:</label> <br> 
       <input type="number" name="contact_no" > <br>
       <input type="submit" value="Add Manufacturer" name="add_mfg"> <br> <br>
   </form>


    <h1>Manufacturer List</h1> 
    <table border="1" width="100%" cellspacing="0" cellpadding="10">
     <tr>        
         <th> ID</th>
         <th> Name</th>
         <th> contact no</th>
         <th> Action</th>
     </tr>

     <?php foreach($rows as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['contact_no']; ?></td>
            <pre>

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

