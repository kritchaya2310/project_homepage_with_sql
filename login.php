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
    <title>Login to website</title>
    <link rel="stylesheet" href="style.css">

</head>


<body>

    <div class="header">

        <div id="animLogin"> </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js'></script>
        <script src="animation.js"></script>
        <h1 style="color: white; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
            Welcome </h1>
    </div>
    <form action="login_db.php" method="post">
        <?php include('errors.php') ?>
        <?php if (isset($_SESSION['error'])) : ?>
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
            <input type="password" name="password" required>
            <label for="password">Password</label>
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn"> LOGIN </button>
        </div>
        <p style="font-size:small; color: #a7a7a7;"> Not a member? <a href="register.php" , style="font-weight: bold" ;>
                Sign up </a> </p>
    </form>
</body>

</html>