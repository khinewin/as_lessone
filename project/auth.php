<?php 

if(session_status()=== PHP_SESSION_NONE){
    session_start();
}


if(!isset($_SESSION['user_auth'])){
    header("location: index.php");
    exit();
}
