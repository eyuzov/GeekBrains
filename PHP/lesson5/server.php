<?php
include "db.php";

$inputFileId = $_GET["file"];

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database Error!");
}
$select = "SELECT `id`, `name`, `path_big`, `count` FROM `images`  WHERE `id` = $inputFileId ";
$updateCount = "update `images` set `count` = `count` +1  WHERE `id` = $inputFileId ";
$tmp = mysqli_query($conn, $select);

if (!$tmp) {
    die("Database Error!");
}

mysqli_query($conn, $updateCount);

mysqli_close($conn);

$result = mysqli_fetch_assoc($tmp);
$count = $result['count']+1;
$file = $result['path_big'] . $result['name'];

$img = "<img src='$file'><h1>Просмотров: $count</h1>";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galary</title>

    <style>
        .content {
            display: block;
            text-align: center;
        }

    </style>

</head>
<body>
<div class="content">
    <?= $img; ?>

</div>


</body>
</html>