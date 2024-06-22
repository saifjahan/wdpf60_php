<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST["submit"])){
    switch($_POST['catagory']){
        case "new":
            echo "what happening around the world";
            break;
            case "weather":
                echo "your weekly forecast";
                break;
                case "sports":
                    echo "latest sports highlights";
                    echo "from your favorite teams";
                    break;
                    default:
                    echo "welcome to my web site";
    }
}


?>
    <form action="" method="POST">
        <select name="catagory" id="">
            <option value="">select one</option>
            <option value="news">news</option>
            <option value="weather">weather</option>
            <option value="sport">sport</option>
</select>
<input type="submit" name="submit" value="send">

    </form>
</body>
</html>