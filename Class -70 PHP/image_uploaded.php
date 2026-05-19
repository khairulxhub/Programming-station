<?php
if(isset($_POST['submit'])) {

    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $file = $_FILES['image'];

    
    if($file['error'] !== 0) {
        echo "Error uploading file.";
        exit;
    }

    if($file['size'] > (120 * 1024)) {
        echo "File size is too large";
        exit;
    }

   
    $allowed_types = [
        "image/jpeg",
        "image/png",
        "image/gif",
        "application/pdf",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
    ];

    if(!in_array($file['type'], $allowed_types)) {
        echo "Invalid File Type. Only JPEG, PNG, GIF, PDF, and Word documents are allowed.";
        exit;
    }

    if(!is_dir("uploaded")) {
        mkdir("uploaded");
    }

    $final_path = "uploaded/" . basename($file['name']);
    $type = mime_content_type($file['tmp_name']);

    if(move_uploaded_file($file['tmp_name'], $final_path)) {
        echo "File Uploaded Successfully";
    } else {
        echo "Failed to move uploaded file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"><br>
        <button type="submit" name="submit">Upload</button>
    </form>

    
</body>
</html>