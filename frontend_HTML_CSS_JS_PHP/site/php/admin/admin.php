<?php
include "../db.php";
include "load.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <style>
        .container{
            display: flex;
            width: 80%;
            margin: 0 auto;
        }
        .container>a{
            margin-top: 60px;
        }
        .items{
            display: flex;
            margin: 50px;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .item{
            padding: 20px;
            border: 1px solid #000;
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="add.php">
        <input type="button" value="Добавить" name="add">
    </a>
    <a href="logout.php">
        <input type="button" value="Выход" name="add">
    </a>
    <?=$mainDiv; ?>

</div>
</body>
</html>

