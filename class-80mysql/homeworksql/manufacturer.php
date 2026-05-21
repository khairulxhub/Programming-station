<?php
require_once('db-config.php');
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