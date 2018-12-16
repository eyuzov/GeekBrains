<?php
include "server.php"
?>

<form action="" method="post">
    <input type="text" name="a">
    <button name="operation" type="submit" value="+">+</button>
    <button name="operation" type="submit" value="-">-</button>
    <button name="operation" type="submit" value="*">*</button>
    <button name="operation" type="submit" value="/">/</button>
    <input type="text" name="b"><?= $row; ?>
</form>