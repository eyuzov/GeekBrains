<?php

$path = "photo/big/" . $_FILES['file']['name'];

if ($_FILES['file']['size'] >= 1073741824) {
    die("Файл слишком велик");
} else {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
        echo "Файл успешно загружен!";
    } else {
        die("Возникла ошибка при загрузке файла");
    };
}


# путь и имя файла оригинальной картинки
$source_src = $path; //'path_2_source_image/source_image_file.gif';
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
$resource_src = "photo/small/" . $_FILES['file']['name'];
# выводит уменьшенную картинку
imagejpeg($resource, $resource_src);

/*

*/