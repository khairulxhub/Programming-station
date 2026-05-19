<?php
if(isset($_POST['submit'])) {
    echo "<pre>";
    print_r ($_FILES['image']);
    echo "</pre>";
    $file = $_FILES['image'];
    echo $file['size'];

    $final_path = "uploaded/" . $file['name'];
  if($file['size'] >(120*1024)) {
    echo "File size is too large";
  } else{
    echo "File Uploaded Successfully";
  }

    move_uploaded_file($file['tmp_name'], "uploaded/" . $file['name']);
    
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
    <form action="" method="POST"  enctype="multipart/form-data">
        <input type="file" name="image"> <br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>