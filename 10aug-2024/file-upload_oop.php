<?php include_once "file_class.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload using oop</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
    $info = $_FILES['photo'];
    $obj = new file($info);
    $obj->upload();

}


?>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="photo">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>