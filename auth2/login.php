<?php 

session_start();

$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];

if( ($email=="user@gmail.com") && ($pass=="12345")){

}else{
    $_SESSION['error']="Authentication failed.";
    header("location: index.php");
}