<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project User Profile</title>
    <link rel="stylesheet" href="bst/css/bootstrap.min.css">
</head>
<body>
<?php include("navbar.php") ?>
    <div class="container">
        <h3>Profile</h3>
        <hr>
        <ul class="list-group">
            <li class="list-group-item">Name :  <?php echo $_SESSION['user_auth']['name'] ?></li>
            <li class="list-group-item">Email :  <?php echo $_SESSION['user_auth']['email'] ?></li>
            <li class="list-group-item">Member since :  
                <?php 
                    $created_at=$_SESSION['user_auth']['created_at'];
                    echo date("d-m-Y h:i:s A", strtotime($created_at));
                ?>
            </li>
        </ul>
    </div>
    
    <script src="bst/js/popper.min.js"></script>
    <script src="bst/js/bootstrap.min.js"></script>
</body>
</html>