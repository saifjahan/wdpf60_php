<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student result sheet</title>
</head>
<body>
    <?php
    $results = ["Saif"=>50, "Nazrul"=>42, "Rummana"=>49, "Tanim"=>41];
    ?>
    <table border="1">
        <tr>
            <th>student name</th>
            <th>obtained score</th>
        </tr>
        <?php
        foreach($results as $name=>$score){
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$score</td>";
            echo "</tr>";
        }

        
        
        ?>

        <tr>
            <td colspan="2">
                <?php $maxscore = max($results);
                $student = array_search($maxscore,$results);
                echo "Maximum score $maxscore obtained by $student";
                ?>

            </td>
        </tr>
    </table>
</body>
</html>