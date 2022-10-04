<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_FILES);
    move_uploaded_file($_FILES['upload_file']['tmp_name'], __DIR__ . '/file/' . $_FILES['upload_file']['name']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD | PHP WEB</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">
            File :
            <input type="file" name="upload_file">
        </label>
        <input type="submit" value="upload">
    </form>
</body>

</html>