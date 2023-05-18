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
        if (!isset($_SESSION['auth'])) {
            header('location:login.php');
        }
        ?>
        <div class="card my-5">
            <div class="card-header text-center display-6 text-white bg-dark">
                CONVERSATION
            </div>
            <div class="card-body">
                <div class="message_holder">
                    <div class="other" style="width:100%; float:left;">
                        <div class="alert alert-secondary" style="width:50%; float:left;">
                            <h6>SENDER</h6>
                            <h6>MESSAGE</h6>
                        </div>
                    </div>
                    <div class="you" style="width:100%; float:right;">
                        <div class="alert alert-primary" style="width:50%; float:right;">
                            <h6>SENDER</h6>
                            <h6>MESSAGE</h6>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" id="input" placeholder="type your messager here....">
            </div>
            <div class="card-footer bg-danger text-center">
                <a href="logout.php"  style="text-decoration:none;color:white;">LOG OUT</a>
            </div>
        </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/chatroom.js"></script>
</body>
</html>