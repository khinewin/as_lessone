<?php 
session_start();
include("process.php");

$email=$_POST['email'];
$pass=$_POST['password'];

if(!$email){
     $_SESSION['error_msg']="The email field is required.";
    header("location: index.php");
}else if(!$pass){
     $_SESSION['error_msg']="The password field is required.";
    header("location: index.php");
}else {
    $p=new Process();
    $p->login($email, $pass);
}