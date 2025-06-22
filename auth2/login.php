<?php 
session_start();

$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
if( ($email=="user@gmail.com") && ($pass=="12345")){
    $_SESSION['user_auth']="user@gmail.com";
    header("location: dashboard.php");
}else{
    $_SESSION['error']="Authentication failed.";
    header("location: index.php");
}