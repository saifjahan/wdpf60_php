<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_REQUEST['submit'])){
    $stid = $_REQUEST['stid'];
//$datas = file('result.txt');
//echo "<pre>";
//print_r($data);
function show_result($stid){
    $datas = file('result.txt');
    foreach($datas as $data){
        $line = explode("|", $data);
        list($id,$name,$score,$result) = $line;
        if($id == $stid){
            echo $id,$name,$score,$result;
        }
    }
    }
    
}



?>
    <form action="" method="post">

    <select name="stid" id="">
    <option value="1">saif</option>
    <option value="2">zamil</option>
    <option value="3">tanim</option>
    </select>
    <input type="submit" name="submit" value="show result">
    </form>
</body>
</html>