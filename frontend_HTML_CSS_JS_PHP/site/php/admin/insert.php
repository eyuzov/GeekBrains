<?php
include "../db.php";

$path = "../../images/" . $_FILES['src']['name'];

$photo = $_FILES['src']['name'];
$collection = $_POST['collection'];
$name = $_POST['name'];
$description = $_POST['descr'];
$material = $_POST['material'];
$designer = $_POST['designer'];
$price = $_POST['price'];

if ($_FILES['src']['name'] >= 1073741824) {
    die("Файл слишком велик");
} else {
    if (move_uploaded_file($_FILES['src']['tmp_name'], $path)) {
        echo "Запись добавлена!";
    } else {
        die("Возникла ошибка при загрузке файла");
    };
}

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}

$sql = "INSERT INTO `goods`(`photo`, `collection`, `name`, `description`, `material`, `designer`, `price`) 
VALUES ('$photo','$collection','$name','$description','$material','$designer',$price)";
$res = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<br><br>
<a href="admin.php"><input type="button" value="Назад"></a>