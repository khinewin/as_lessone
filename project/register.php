<!doctype html>
<!--<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
  </body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Login</title>
    <link rel="stylesheet" href="bst/css/bootstrap.min.css">
</head>
<body>
<?php include("navbar.php") ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 mt-5">
                <h2 class="text-center text-primary">Project</h2>
                <div>Sginup new user account.</div>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="">
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" class="form-control" name="email">
                            </div>
                             <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="confirm_password">Confirm Password</label>
                                <input id="confirm_password" type="password" class="form-control" name="confirm_password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Signup</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div>Already have an account ? <a href="index.php">Sign in now</a></div>
            </div>
        </div>
    </div>
    
    <script src="bst/js/popper.min.js"></script>
    <script src="bst/js/bootstrap.min.js"></script>
</body>
</html>