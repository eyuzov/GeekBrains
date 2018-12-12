<?php
include "db.php";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}
$sql = "select * from `feedback`";
$res = mysqli_query($conn, $sql);
mysqli_close($conn);


$div = "<div class='feedback-flex'>";
while ($tmp = mysqli_fetch_assoc($res)) {

    foreach ($tmp as $key => $value) {

        $out = "<div class='feedback-item'>";
        $out .= "<div class='text'>";

        $out .= "<div class='author-flex'>";
        $out .= "<div>";

        $out .= $tmp['author'];

        $out .= "</div>";
        $out .= "<div class='date'>";
        $out .= $tmp['date'];

        $out .= "</div>";
        $out .= "</div>";

        $out .= "<p class='text'>";
        $out .= $tmp['text'];


        $out .= "</p></div></div>";

        $div .= $out;
        break;
    }
}
$div .= "</div>";


