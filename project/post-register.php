<?php 
session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$confirm_pass=$_POST['confirm_password'];

if(!$name){
    $_SESSION['error_msg']="The name filed is required.";
    header("location: register.php");
}elseif(!$email){
    $_SESSION['error_msg']="The email filed is required.";
    header("location: register.php");
}elseif(!$pass){
 $_SESSION['error_msg']="The password filed is required.";
    header("location: register.php");
}elseif(!$confirm_pass){
 $_SESSION['error_msg']="The confirm password filed is required.";
    header("location: register.php");
}else if($pass != $confirm_pass){
     $_SESSION['error_msg']="The password and confirm password must match.";
    header("location: register.php");
}