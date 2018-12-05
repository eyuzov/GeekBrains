<?php

$path = "photo/" . $_FILES['file']['name'];
if ($_FILES['file']['size'] >= 1073741824) {
    die("Файл слишком велик");
} else {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
        echo "Файл успешно загружен!";
    } else {
        die("Возникла ошибка при загрузке файла");
    };
}
?>