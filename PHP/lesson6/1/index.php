<?php
include "server.php";
?>

<form action="" method="post">
    <input type="text" name="a">
    <select name="operation" id="" >
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="b">
    <input type="submit" value="рассчитать"><?=$row;?>
</form>