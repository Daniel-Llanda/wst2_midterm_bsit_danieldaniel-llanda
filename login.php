<?php
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <?php
        session_start();
        if (isset($_SESSION['auth'])) {
            header('location:chatroom.php');
        }
        ?>
        <div class="row my-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center display-6 text-white bg-dark">
                        LOG IN
                    </div>
                    <div class="card-body">
                        <form id="form_login">
                            <div id="alert-login"> 
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email_login" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password_login" name="password">
                            </div>
                            <button type="button" class="btn btn-dark" id="btn_log">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center display-6 text-white bg-dark">
                        REGISTER
                    </div>
                    <div class="card-body">
                        <form id="form_register">
                            <div id="alert-register"> 
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name_register" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email_register" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password_register" name="password"required>
                            </div>
                            <button type="button" class="btn btn-dark" id="btn_reg">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
    
</body>
</html>