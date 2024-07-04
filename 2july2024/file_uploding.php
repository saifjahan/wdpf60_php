<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>

<?php

if(isset($_POST['submit'])){


$temp =$_FILES['photo']['tmp_name'];
 $filename = $_FILES['photo']['name']; //saiful.jpg
$filedata =  pathinfo($filename);
 $file_ext = $strtoLower($filename['extension']);
 $allwoed_ext = ["jpg","jpeg","png"]; 
 $filesize = $_FILES['photo']['size'];
 $allowedsize = 307200;
$path = "photos/"   . $filename;

$errors = [];
if($filesize>$allowedsize){
    $errors[] = "within 300 kb is allowed";
}
if(in_array($file_ext,$allwoed_ext)){
    $errors[] = "allowed file type jpg,jpeg,png";
}

if(count($errors)>0){
    foreach($errors as $err){
        echo $err . "<br>";
    }

}else{
   $status = move_uploaded_file($temp, $path);
   if($status) echo "successfully Uploaded";
}

}

?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name"><br>
        <input type="text" name="email"><br>
        <input type="file" name="photo"><br>
        <input type="submit" name="submit" value="SEND">

    </form>
</body>
</html>