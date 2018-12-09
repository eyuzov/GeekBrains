<?php
include "db.php";
$fileName = $_FILES['file']['name'];
$fileSize = $_FILES['file']['size'];
$pathSmall = "photo/small/";
$pathBig = "photo/big/";

if($_FILES['file']['error']!=0){
    die("Error load file!");
}
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database Error!");
}
$insert = "INSERT INTO `images` (`name`, `path_small`, `path_big`, `size`) 
VALUES ('$fileName','$pathSmall','$pathBig',$fileSize)";

if (!mysqli_query($conn, $insert)) {
    die("Error load file!");
}
mysqli_close($conn);

if ($fileSize >= 1073741824) {
    die("Файл слишком велик");
} else {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $pathBig . $fileName)) {
        echo "Файл успешно загружен!";
    } else {
        die("Возникла ошибка при загрузке файла");
    };
}


# путь и имя файла оригинальной картинки
$source_src = $pathBig . $fileName;
# считываем параметры (высота/ширина, тип и т.п.)
# оригинальной картинки
$params = getimagesize($source_src);
# в зависимости от типа оригинальной картинки
# применяем соответствующую функцию для считывания
# и создания изображения с которым будем работать
switch ($params[2]) {
    case 1:
        $source = imagecreatefromgif($source_src);
        break;
    case 2:
        $source = imagecreatefromjpeg($source_src);
        break;
    case 3:
        $source = imagecreatefrompng($source_src);
        break;
}
# максимально допустимый размер
# (по ширине/высоте) уменьшенной картинки
$max_size = 400;
# если ширина или высота оригинальной картинки
# больше ограничения производим вычисления
if ($params[0] > $max_size || $params[1] > $max_size) {
# выбираем большее: ширины или высота
# оригинальной картинки
    if ($params[0] > $params[1]) $size = $params[0]; # ширина
    else $size = $params[1]; # высота
# используя нехитрую пропорцию вычислям
# ширину и высоту уменьшенной картинки
    $resource_width = floor($params[0] * $max_size / $size);
    $resource_height = floor($params[1] * $max_size / $size);

    $resource = imagecreatetruecolor($resource_width, $resource_height); // создание «подкладки»

# изменение размера и копирование полученного на «подкладку»
    imagecopyresampled($resource, $source, 0, 0, 0, 0, $resource_width, $resource_height, $params[0], $params[1]);
}
# если изменять размер не надо просто присваиваем переменной
# $resource идентификатор оригинальной картинки
else $resource = $source;

# путь и имя файла уменьшенной картинки
$resource_src = $pathSmall . $fileName;
# выводит уменьшенную картинку
imagejpeg($resource, $resource_src);

