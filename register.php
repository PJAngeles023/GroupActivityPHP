<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('location: session.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact Application</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-5">
                <h1 class="fw-bold">Register</h1>
                <p>Create an account.</p>
                <?php
                    if(isset($_SESSION['error'])){
                        echo '<div class="alert alert-danger" role="alert">
                        '.$_SESSION['error'].'
                        </div>';
                        unset($_SESSION['error']);
                    }
                ?>
                <div class="card">
                    <div class="card-body">
                        <form action="config/registeruser.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Confirm password</label>
                                <input type="password" class="form-control" id="password" name="confirmpassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create account</button>
                            <p class="mt-2"><a href="index.php">Already have an account? Login here.</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>