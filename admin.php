<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="..." crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>
    <ul class="admineditor">
        <li><a href="admin_page.php">Home Page </a></li>
    </ul>
    <div class="homeadmin">
        <h1> Admin Editor Page </h1>
        <!-- <p> Sport days Management </p> -->
    </div>


    <div class="container">
        <!-- <div class="adminbody"> -->
        <div class="row">
            <div class="adminbody">
                <div class="col-md-12"> <br>
                    <h3 style="color:black">ATHLETE LIST <a href="addData.php" class="addbtn">Add</a></h3>
                    <table id="myTable1" class="table table-dark table-striped-columns">
                        <thead>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Color</th>
                            <th>Sport</th>
                            <th width="5%">Delete</th>
                        </thead>
                        <tbody>
                            <?php

                            require_once 'connect.php';

                            $stmt = $conn->prepare("SELECT * FROM `users`");
                            $stmt->execute();

                            $result = $stmt->get_result();
                            $users = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($users as $user) {

                            ?>
                                <tr>
                                    <td><?php echo $user['title'] ?></td>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['lastname'] ?></td>
                                    <td><?php echo $user['color'] ?></td>
                                    <td><?php echo $user['sport'] ?></td>
                                    <td><a href="delete.php?id=<?php echo $user['id']; ?>" class="deletebtn" onclick="return confirm('Confirm !!');">delete</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="adminbody">
                <div class="col-md-12"> <br>
                    <h3 style="color:black">MATCH <a href="addMatch.php" class="addbtn">Add</a></h3>
                    <table id="myTable2" class="table table-dark table-striped-columns">
                        <thead>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Round</th>
                            <th>Place</th>
                            <th>ColorGroup1</th>
                            <th>ColorGroup2</th>
                            <th width="5%">Delete</th>
                        </thead>
                        <tbody>
                            <?php

                            require_once 'connect.php';

                            $stmt = $conn->prepare("SELECT * FROM `schecdule`");
                            $stmt->execute();

                            $result = $stmt->get_result();
                            $users = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($users as $user) {

                            ?>
                                <tr>
                                    <td><?php echo $user['Time'] ?></td>
                                    <td><?php echo $user['Date'] ?></td>
                                    <td><?php echo $user['Event'] ?></td>
                                    <td><?php echo $user['Round'] ?></td>
                                    <td><?php echo $user['Place'] ?></td>
                                    <td><?php echo $user['ColorGroup1'] ?></td>
                                    <td><?php echo $user['ColorGroup2'] ?></td>
                                    <td><a href="deleteMatch.php?matchid=<?php echo $user['matchid']; ?>" class="deletebtn" onclick="return confirm('Confirm !!');">delete</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="adminbody">
                <div class="col-md-12"> <br>
                    <h3 style="color:black">MEDAL <a href="addMedal.php" class="addbtn">Add</a></h3>
                    <table id="myTable3" class="table table-dark table-striped-columns">
                        <thead>
                            <th>Team</th>
                            <th>Gold</th>
                            <th>Silver</th>
                            <th>Bronze</th>
                            <th>Total</th>
                            <th width="5%">Delete</th>
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
                                    <td><a href="deleteMedal.php?id_medal=<?php echo $user['id_medal']; ?>" class="deletebtn" onclick="return confirm('Confirm !!');">delete</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="adminbody">
                <div class="col-md-12"> <br>
                    <h3 style="color:black">RESULT <a href="addResult.php" class="addbtn">Add</a></h3>
                    <table id="myTable4" class="table table-dark table-striped-columns">
                        <thead>
                            <th>Team</th>
                            <th>Sport</th>
                            <th>Rank</th>
                            <th width="5%">Delete</th>
                        </thead>
                        <tbody>
                            <?php

                            require_once 'connect.php';

                            $stmt = $conn->prepare("SELECT * FROM `result`");
                            $stmt->execute();

                            $result = $stmt->get_result();
                            $users = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($users as $user) {

                            ?>
                                <tr>
                                    <td><?php echo $user['team'] ?></td>
                                    <td><?php echo $user['sport'] ?></td>
                                    <td><?php echo $user['rank'] ?></td>
                                    <td><a href="deleteResult.php?re_id=<?php echo $user['re_id']; ?>" class="deletebtn" onclick="return confirm('Confirm !!');">delete</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- </div> -->

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script>
            let table1 = new DataTable('#myTable1');
        </script>
        <script>
            let table2 = new DataTable('#myTable2');
        </script>
        <script>
            let table3 = new DataTable('#myTable3');
        </script>
        <script>
            let table4 = new DataTable('#myTable4');
        </script>
    </div>

</body>

</html>