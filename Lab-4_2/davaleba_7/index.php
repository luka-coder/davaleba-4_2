<?php
    include "val.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        სახელი <input type="text" name = "first">
        <?php
        validation1();
        ?>
        <br><br>
        გვარი  <input type="text" name = "last">
        <br><br>
        დაბადების თარიღი <input type="date" name="date">
        <br><br>
        კურსი  <input type="number" name="kursi" id="">
        <br><br>
        პირადი ნომერი <input type="number" name="id" id="">
        <br><br>
        მისამართი <input type="text" name = "address">
        <br><br>
        მობილურის ნომერი <input type="text" name = "phone">
        <br><br><input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST["submit"])){
            validation();
        }
    ?>
</body>
</html>