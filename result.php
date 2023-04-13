<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="margin: 50px;">
    <div class="tablebody">
        <h1>ผลการแข่งขัน </h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Team</th>
                    <th>Sport</th>
                    <th>Rank</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbName = "final_project_v2";

                //create connection
                $conn = new mysqli($servername, $username, $password, $dbName);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //read information all row in mydatabase
                $sql = "SELECT * FROM `result`;";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query; " . $conn->connect_error);
                }

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["team"] . "</td>
                    <td>" . $row["sport"] . "</td>
                    <td>" . $row["rank"] . "</td>
                </tr>";
                }

                $conn->close();

                ?>
            </tbody>
        </table>
    </div>

</body>

</html>