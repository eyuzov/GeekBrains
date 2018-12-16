<?php
include "../db.php";
session_start();

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
} else $login = "";
if (isset($_SESSION['pass'])) {
    $pass = $_SESSION['pass'];
} else $pass = "";
?>

<form action="check.php" method="post">
    <br>LOGIN<br>
    <input type="text" name="login" title="login" value="<?= $login; ?>">
    <br><br>PASSWORD<br>
    <input type="text" name="pass" title="pass" value="<?= $pass; ?>">
    <br>
    <br>
    <input type="submit" value="Отправить">
</form>
