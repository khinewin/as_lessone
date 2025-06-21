<?php 
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

if($email=="user@gmail.com" &&  $password=="12345"){
    $_SESSION['user_auth']='user@gmail.com';
    header("location: dashboard.php");
}else{
    $_SESSION['err']="Authentication failed.";
    header("location: index.php");
}
