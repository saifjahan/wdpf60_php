<a href="get_post.php?=mame&email=masud@.eom&addrss.com&address">click</a><br>

<?php

//echo "<pre>";
//print_r($_GET);
//print_r($_POST);
//echo "</pre>";

if(isset($_POST['subscribe'])){
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['pswd'];
}

?>

<form action="" method="post">

 Email address:<br />
 <input type="text" name="email" size="20" maxlength="50" value="" /><br>
 
 Password:<br />
 <input type="password" name="pswd" size="20" maxlength="15" value="" /><br>
 
 <input type="submit" name="subscribe" value="subscribe!" />
 
</form>
