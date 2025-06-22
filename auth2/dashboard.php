<?php
session_start();
if(!isset($_SESSION['user_auth'])){
    header("location: index.php");
    die("You are not login.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body>    
    <div class="container">
        <h1>Dashboard</h1>
        <div class="alert alert-success">
            You are login as <?php echo $_SESSION['user_auth'] ?>
        </div>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>

</body>
</html>