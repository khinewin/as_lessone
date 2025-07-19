<?php 
session_start();
include("process.php");

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$confirm_pass=$_POST['confirm_password'];

if(!$name){
    $_SESSION['error_msg']="The name field is required.";
    header("location: register.php");
}elseif(!$email){
    $_SESSION['error_msg']="The email field is required.";
    header("location: register.php");
}elseif(!$pass){
 $_SESSION['error_msg']="The password field is required.";
    header("location: register.php");
}elseif(!$confirm_pass){
 $_SESSION['error_msg']="The confirm password field is required.";
    header("location: register.php");
}else if($pass != $confirm_pass){
     $_SESSION['error_msg']="The password and confirm password must match.";
    header("location: register.php");
}else{
    
    $p=new Process();
    $p->register($name, $email, $pass);
    
}