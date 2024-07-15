<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>country sorting</title>
</head>
<body>
    <h1>country and capital where country wise sorting</h1>
    <?php
    $countries = ["Bangaldesh"=>"Dhaka",
                    "srilanka"=>"colombo",
                    "uganda"=>"Kampala",
                    "China"=>"Beijing",
                    "Hungry"=>"Budapest",
                    "japan"=>"Tokoyo",  
    
    
];
 ksort($countries);
 foreach($countries as $country=>$capital){
    echo "$country | $capital <br>";
 }
    
    
    ?>
    
</body>
</html>