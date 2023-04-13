<?php 
    session_start();
    include('connect.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to website</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="header">
        <div id="animLogin"> </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js'></script>
        <script src="animation.js"></script>
        <h1> Register </h1>
    </div>
    <form action="register_db.php" method="post">
        <?php include('errors.php') ?>
        <?php if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="txt_field">
            <input type="text" name="username" required>
            <label for="username">Username</label>
        </div>
        <div class="txt_field">
            <input type="email" name="email" required>
            <label for="email">Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password_1" required>
            <label for="password_1">password</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password_2" required>
            <label for="password_2">Confirm password</label>
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn"> Register </button>
        </div>
        <p style="font-size:small; color: #a7a7a7;"> Has registered before <a href="login.php" , style="font-weight: bold" ;> Sign in </a> </p>
    </form>
</body>
</html>