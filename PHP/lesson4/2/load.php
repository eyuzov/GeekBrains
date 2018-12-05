<?php
$path = "photo/big/";
$file = $path.$_GET["file"];
$img = "<img src='$file'>";
echo $img;