<?php
require_once('db-config.php');
if(isset($_POST['add_mfg'])) {
   $name = $_POST['name'] ;
   $address = $_POST['address'];
   $is_active = isset($_POST['active']) ? 1 : 0;

$db ->query( "INSERT INTO manufactures(name, address, is_active) 
VALUES('$name', '$address', $is_active)");

   
}
if(isset($_POST['delete_mfg'])) {
    $id = $_POST['delete_id'];
    $db->query("DELETE FROM manufactures WHERE id = $id");
}

$result = $db->query("SELECT * FROM manufactures");
if ($result) {
    // echo "Succefully connected";
    $mfg = $result->fetch_all(MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($mfg);
    // echo "</pre>";
} else {
    echo $db->error;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>

<body>
    <nav>
        <ul>
            <a href="manufacturer.php">Manufacturer</a> |
            <a href="products.php">Product</a>
        </ul>
        <div style="display: flex; gap:100px;">
            <div>
                <h2>Add New Manufacturer</h2>
                <form action="" method="post">
                    <label for="name">Name:</label> <br>
                    <input type="text" name="name" id="name">
                    <br>
                    <label for="address">Address:</label> <br>
                    <textarea name="address" id="address"></textarea>
                    <br>
                    <br>
                    <input type="checkbox" name="active" id="active">
                    <label for="active">Is active</label>
                    <br>
                    <button type="submit" name="add_mfg">save</button>
                </form>
            </div>

            <div>
                <h2>Manufacturer List</h2>
                <table border="1" cellspacing="0" cellpadding="10" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>is_active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- <td></td>
                            <td></td>
                            <td></td>
                            <td></td> -->

                        <?php
                        if (isset($mfg)) {
                            foreach ($mfg as $item) {
                                echo "<tr>
                                
                                
                                
                                <td>{$item['id']}</td>
                                <td>{$item['name']}</td>
                                <td>{$item['address']}</td>
                                <td>".($item['is_active'] ? 'Active' : 'Inactive') ."</td>
                                <td>
                                <form action='manufacturer-edit.php' method='get'>
                                <input type='hidden' name='id' value='{$item['id']}'>
                                <button type='submit'>Edit</button>
                                </form>
                                <form action='manufacturer-dtails.php' method='GET'>
                                <input type='hidden' name='id' value='{$item['id']}'>

                                <button type='submit'>Details</button>
                                </form>
                                <form action='' method='post'>
                                <input type='hidden' name='delete_id' value='{$item['id']}'>
                                <button type='submit' name='delete_mfg'>Delete</button>
                                </form>
                                </td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </nav>
</body>

</html>