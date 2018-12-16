<?php
include "../db.php";
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}

$sql = "select * from `goods` ";
$res = mysqli_query($conn, $sql);
mysqli_close($conn);

$mainDiv = "<div class='items'>";

while ($row = mysqli_fetch_assoc($res)) {
    $div = "";
    foreach ($row as $value) {

        $div .= "
        <div class='item'>
            <img src='../../images/$row[photo]' alt='photo'>
            <p>$row[collection]</p>
            <p>$row[name]</p>
            <p>$row[description]</p>
            <p>$row[material]</p>
            <p>$row[designer]</p>
            <p>$row[price]</p>
            <a href='edit.php?id=$row[id]'><input type='button' value='Изменить' name='change'></a>
            <a href='remove.php?id=$row[id]'><input type='button' value='Удалить' name='remove'></a>
        </div>
        ";
        break;
    }
    $mainDiv .= $div;
}

$mainDiv .= "</div>";

