<?php
$dir = "photo/";
$files = scandir($dir);
$content = "<div class='content'>";
for ($i = 2; $i < count($files); $i++) {
    $img = "<div><a href='$dir$files[$i]' target='_blank'>
    <img src=$dir$files[$i] alt='image' class='img'></a></div>";

    $content .= $img;
}
$content .= '</div>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galary</title>

    <style>
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: lightgrey;
        }

        .img {
            width: 300px;
        }
    </style>

</head>
<body>

<?= $content; ?>


<form method="POST" action="server.php" enctype="multipart/form-data">
    <p>Загрузка файла</p>
    <input type="hidden" name="MAX_FILE_SIZE" value="1073741824" />
    <input type="file" name="file" accept="image/*"><br><br>
    <input type="submit" value="Загрузить">

</form>


</body>
</html>
