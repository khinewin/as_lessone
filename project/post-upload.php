<?php 
if(session_status()=== PHP_SESSION_NONE){
    session_start();
}
include("database.php");

$file=$_FILES['upload_file'];

if($file['size'] <=0){
    $_SESSION['error_msg']="Please select file for upload.";
    header("location: dashboard.php");
    return;
}
$user_id=$_SESSION['user_auth']['id'];
$file_name=$file['name']."-".date("dmyhis");
$file_path="uploads/$file_name";

$tmp_name=$file['tmp_name'];
move_uploaded_file($tmp_name, $file_path);

$_SESSION['success_msg']="The selected file has been uploaded.";
header("location: dashboard.php");
