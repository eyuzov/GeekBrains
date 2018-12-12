<?php
include "db.php";

$name = $_POST['name'];
$text = $_POST['text'];

$conn = mysqli_connect($host, $user, $pass, $db );

if(!$conn){
    die("Error connect to database");
}
$sql = "insert into `feedback` (`author`, `text`, `date`) values ('$name', '$text', sysdate())";

mysqli_query($conn, $sql);

mysqli_close($conn);

header("location: feedback.php");