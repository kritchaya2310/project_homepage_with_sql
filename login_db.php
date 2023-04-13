<?php
    session_start();
    include('connect.php');

    $errors = array();

    if(isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        
        if(empty($password)) {
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM userdata WHERE username ='$username' AND password = '$password'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);

                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['userlevel'] = $row['userlevel'];
                
                if($_SESSION['userlevel'] == 'a'){
                    $_SESSION['success'] = "You are now logged in as Admin";
                    header('location: admin_page.php');
                }

                if($_SESSION['userlevel'] == 'm'){
                    $_SESSION['success'] = "You are now logged in as Member";
                    header('location: index.php');
                }
                   
            }else{
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong username or Password please try again";     
                header("location: login.php");
            }
        }
    }

?>