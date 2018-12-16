<?php
include "../db.php";
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}

$sql = "delete from `goods` where id = {$_GET['id']} ";
mysqli_query($conn, $sql);
$res = mysqli_affected_rows($conn);
mysqli_close($conn);
if($res>0){
    echo "Запись успешно удалена";

}
?>
<br><br>
<a href="admin.php"><input type="button" value="Назад"></a>
