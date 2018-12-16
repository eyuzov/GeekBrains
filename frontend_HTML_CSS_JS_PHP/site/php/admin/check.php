<?php
include "../db.php";


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}
$sql = "select * from `users` where login = '{$_POST['login']}' and pass = '".md5($_POST['pass'])."'";
$res = mysqli_query($conn, $sql);
mysqli_close($conn);

if(!mysqli_num_rows($res)){
    echo "Пользователь не найден";
    echo session_id();
} else {
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pass'] = $_POST['pass'];
    header("location:admin.php");
}
