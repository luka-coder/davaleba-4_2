<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        sigrdze<input type="text" name = "sigrdze">
        <br><br>
        sigane<input type="text" name = "sigane">
        <br><br>
        <input type="submit" value = "submit">
    </form>
    <table cellspacing = "0">
        <?php
            $M = $_POST["sigrdze"];
            $N = $_POST["sigane"];

            for($i=0;$i<=$M;$i++){
                echo"<tr>";
                for($j=0;$j<=$N;$j++){
                    echo"<td>".substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,7)."</td>";
                }
                echo"</tr>";
            }
        ?>
    </table>
</body>
</html>