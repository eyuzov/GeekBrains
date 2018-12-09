<?php
include "db.php";

if (!$conn = mysqli_connect($host, $user, $pass, $db)) {
    die("Database Error!");
}
$select = "SELECT `id`, `name`, `path_small`, `count` FROM `images` order by `count` desc";
$tmp = mysqli_query($conn, $select);
mysqli_close($conn);

if (!$tmp) {
    die("Database Error!");
}
$content = "<div class='content'>";

while ($result = mysqli_fetch_assoc($tmp)) {
    $img = "<div><a href=server.php?file=$result[id] target='_blank'>
        <img src='$result[path_small]$result[name]' alt='image' class='img'></a>
        <h2>Просмотров: $result[count]</h2></div>";
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


<form method="POST" action="load.php" enctype="multipart/form-data">
    <p>Загрузка файла</p>
    <input type="hidden" name="MAX_FILE_SIZE" value="1073741824"/>
    <input type="file" name="file" accept="image/*"><br><br>
    <input type="submit" value="Загрузить">

</form>
<script>
  let a = document.getElementsByClassName("content");
  console.log(a);
  a[0].addEventListener('click', (e) => {
    if (e.target.tagName = 'IMG') {
      location.reload()
    }
  });
</script>

</body>
</html>
