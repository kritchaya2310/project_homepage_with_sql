<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must be login first';
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="homeheader">
        <h2> ADMIN PAGE </h2>
    </div>

    <div class="side-menu">
        <div class="topicname">
            <h1> SPORT DAYS COMPETITION </h1>
        </div>
        <div class="topicname">
            <h1 style="font-size: 30px;">DURATION 1 - 3 APRIL 2023</h1>
        </div>

        <!-- <div class="admineditor">
            <p><a href="admin.php"> Admin Editor </a></p>
        </div> -->
        <div class="info">
            <!-- User Notifications -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <!-- User Informations -->
            <!-- <?php if (isset($_SESSION['username'])) : ?>
                    <p>" <strong><?php echo $_SESSION['username']; ?> "</strong></p>
                <?php endif ?> -->
        </div>
    </div>

    <div class="homecontent">
        <a href="Support_member.php">
            <div class="box">
                <div class="icon"><i class="fa fa-sitemap"></i></div>
                <div class="boxcontent4">
                    <h3 style="color: white;">Support Members</h3>
                </div>
            </div>
        </a>

        <a href="academic_member.php">
            <div class="box">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="boxcontent5">
                    <h3 style="color: white;">Academic Members</h3>
                </div>
            </div>
        </a>

        <a href="other_member.php">
            <div class="box">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="boxcontent6">
                    <h3 style="color: white;">Other Members</h3>
                </div>
            </div>
        </a>

    </div>

    <a href="users.php">
        <div class="homecontent">
            <div class="box">
                <div class="icon"><i class="fa-sharp fa fa-circle-info"></i></div>
                <div class="boxcontent1">
                    <h3 style="color: white;">ATHLETE</h3>
                </div>
            </div>
    </a>
    <a href="match.php">
        <div class="box">
            <div class="icon"><i class="fa fa-calendar-days"></i></div>
            <div class="boxcontent2">
                <h3 style="color: white;">MATCH</h3>
            </div>
        </div>
    </a>
    <a href="result.php">
        <div class="box">
            <div class="icon"><i class="fa fa-list-ol"></i></div>
            <div class="boxcontent3">
                <h3 style="color: white;">RESULT</h3>
            </div>
        </div>
    </a>

    </div>



    <div class="floating-container">
        <div class="floating-button">⫶</div>
        <div class="element-container">
            <span class="float-element">
                <a href="index.php?logout='1'" style="color: aliceblue;">Logout</a>
            </span>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12"> <br>
                <h3>Overall Result</h3>
                <table id="myTable1" class="table table-dark table-striped-columns">
                    <thead>
                        <th>Team</th>
                        <th>🥇(Gold)</th>
                        <th>🥈(Silver)</th>
                        <th>🥉(Bronze)</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <?php

                        require_once 'connect.php';

                        $stmt = $conn->prepare("SELECT * FROM `medal`");
                        $stmt->execute();

                        $result = $stmt->get_result();
                        $users = $result->fetch_all(MYSQLI_ASSOC);
                        foreach ($users as $user) {

                        ?>
                            <tr>
                                <td><?php echo $user['team'] ?></td>
                                <td><?php echo $user['gold'] ?></td>
                                <td><?php echo $user['silver'] ?></td>
                                <td><?php echo $user['bronze'] ?></td>
                                <td><?php echo $user['total'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="floating-container">
        <div class="floating-button"><?php if (isset($_SESSION['username'])) : ?>
                <p><strong style="color:white"><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
        </div>
        <div class="element-container">
            <span class="float-element">
                <a href="admin.php" style="color: aliceblue;"> Admin Editor 📝 </a>
            </span>
        </div>
        <div class="element-container">
            <span class="float-element">
                <a href="index.php?logout='1'" style="color: aliceblue;">Logout</a>
            </span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</body>

</html>