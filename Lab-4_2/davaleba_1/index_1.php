<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table cellspacing = "0">
        <?php
            for($i=0;$i<=10;$i++){
                echo "<tr>";
                for($j=0;$j<=10;$j++){
                    echo "<td>".substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,7)."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>