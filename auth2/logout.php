<?php 

session_start();
unset($_SESSION['user_auth']);
header("location: login.php");