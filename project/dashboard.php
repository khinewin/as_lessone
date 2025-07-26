<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Dashboard</title>
    <link rel="stylesheet" href="bst/css/bootstrap.min.css">
</head>
<body>
<?php include("navbar.php") ?>

    <div class="container">
        <h3>Dashboard</h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <?php include("msg.php"); ?>
                <form method="post" action="post-upload.php" enctype="multipart/form-data">
                <div class="form-group d-flex">
                    <input name="upload_file" type="file" class="form-control">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="bst/js/popper.min.js"></script>
    <script src="bst/js/bootstrap.min.js"></script>
</body>
</html> 