<?php 
session_start();

if(!isset($_SESSION['user_auth'])){
    header("location: index.php");
    exit();
}

?>
<h1>Welcome Dashboard</h1>
<div>you are login as 
    <?php echo $_SESSION['user_auth'] ?>
</div>
<a href="logout.php">Logout</a>