<?php 

require './config/function.php';

if(isset($_SESSION['auth'])){
    redirect('tsag.php','you are already logged in ');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="py-4 bg-secondary text-center">
        <h4 class="text-white">Login</h4>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">

                        <?=alertMessage();?>

                        <form action="login-code.php" method="POST">
                            <div class="mb-3">
                                <label>User ID</label>
                                <input type="text" name="id" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>password</label>
                                <input type="password" name="password" required class="form-control">
                            </div>
                            <button type="submit" name="loginBtn"class="btn btn-primary w-100">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>