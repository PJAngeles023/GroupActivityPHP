<?php
session_start();
if(!isset($_SESSION['id'])){
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
                <h1 class="fw-bold">Home</h1>
                <p>Welcome, <strong><?php echo $_SESSION['username'] ?></strong>
                <a href="config/logout.php">Logout</a></p>
                <div class="card">
                    <div class="card-body">
                    <button onclick="location.href='contacts.php'">Go to Contacts</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>