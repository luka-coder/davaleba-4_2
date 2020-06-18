<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        sheiyvanet kodi<input type="text" name = "kodi">
        <input type="submit" value="submit">
    </form>
    <?php
        $kodi = $_POST["kodi"];
        $a = substr(str_shuffle("0123456789"),0,7);
        if($kodi == $a){
            echo "password is correct";
        }
        else{
            echo "password is not correct!!!";
        }
    ?>
</body>
</html>