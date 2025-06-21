<?php 

$myFile=$_FILES['myFile'];

$name=$myFile["name"];
$tmp_name=$myFile['tmp_name'];

move_uploaded_file($tmp_name, "data/$name");

header("location: index.php");

//echo $myFile;
