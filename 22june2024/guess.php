<?php
if(isset($_post['submit'])){
    $secretNumber = 453;
    if($_post['guess'] == $secretNumber){
        echo "congratulations !";
    }
}



?>
<form action="" mothod="post">
    input type="text" name="guess">
    input type="submit" name="submit" value="send"
</form>