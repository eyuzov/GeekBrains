<?php
include "../db.php";

$id = $_POST['id'];

$photo = $_FILES['src']['name'] != "" ? $_FILES['src']['name'] : $_POST['photo'];
$collection = $_POST['collection'];
$name = $_POST['name'];
$description = $_POST['descr'];
$material = $_POST['material'];
$designer = $_POST['designer'];
$price = $_POST['price'];

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}

$sql = "UPDATE `goods` SET `photo`='$photo',`collection`='$collection',`name`='$name',
`description`=$description,`material`='$material',`designer`='$designer',`price`=$price WHERE id=$id ";
mysqli_query($conn, $sql);
$res = mysqli_affected_rows($conn);

if($res>0){
    echo "Запись успешно изменена";

}

mysqli_close($conn);

?>
<br><br>
<a href="edit.php?id=<?=$id?>"><input type="button" value="Назад"></a>
