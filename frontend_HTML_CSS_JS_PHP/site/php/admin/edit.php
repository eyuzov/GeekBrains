<?php
include "../db.php";

$id = $_GET['id'];

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}

$sql = "select * from `goods` where id=$id ";
$res = mysqli_query($conn, $sql);
mysqli_close($conn);

$row = mysqli_fetch_assoc($res);

$div = "";
$div .= "
        <div class='item'>
            <form action='update.php' method='post'  enctype='multipart/form-data'>
                <input type='hidden' name='id' value='$id'>
                <input type='hidden' name='photo' value='$row[photo]'>
                <img src='../../images/$row[photo]' alt='photo' >
                <p>Изменить изображение</p>
                <input type='file' name='src'>
                <p>Изменить коллекцию</p>
                <input type='text'  value='$row[collection]' name='collection'>
                <p>Изменить название</p>
                <input type='text'  value='$row[name]' name='name'>
                <p>Изменить описание</p>
                <textarea cols='30' rows='10' name='descr'>$row[description]</textarea>
                <p>Изменить материал</p>
                <input type='text'  value='$row[material]' name='material'>
                <p>Изменить дизайнера</p>
                <input type='text'  value='$row[designer]' name='designer'>
                <p>Изменить стоимость</p>
                <input type='text'  value='$row[price]' name='price'><br>
                <input type='submit' value='Сохранить' name='change'>
                <a href='remove.php?id=$row[id]'><input type='button' value='Удалить' name='remove'></a>
                <a href='admin.php'><input type='button' value='Назад' name='remove'></a>
            </form>
        </div>
        ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <style>
        .container {
            display: flex;
            width: 80%;
            margin: 0 auto;
        }

        .container > a {
            margin-top: 60px;
        }

        .items {
            display: flex;
            margin: 50px;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .item {
            padding: 20px;
            border: 1px solid #000;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>

<div class="container">

    <?= $div; ?>

</div>
</body>
</html>
