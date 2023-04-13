<?php

$total = "";

if (isset($_POST['team']) && isset($_POST['gold']) && isset($_POST['silver']) && isset($_POST['bronze']) && isset($_POST['submit'])) {

    require_once 'connect.php';

    $team = $_POST['team'];
    $gold = $_POST['gold'];
    $silver = $_POST['silver'];
    $bronze = $_POST['bronze'];
    $total = $gold + $silver + $bronze;

    $stmt = $conn->prepare("INSERT INTO medal (team, gold, silver, bronze, total) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $team, $gold, $silver, $bronze, $total);

    if ($stmt->execute()) {
        ?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <script>
            setTimeout(function() {
                swal({
                    title: "เพิ่มข้อมูลสำเร็จ",
                    type: "success"
                }, function() {
                    window.location = "admin.php";
                });
            }, 1000);
        </script>
        <?php
    } else {
        ?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <script>
            setTimeout(function() {
                swal({
                    title: "เกิดข้อผิดพลาด",
                    type: "error"
                }, function() {
                    window.location = "admin.php";
                });
            }, 1000);
        </script>
        <?php
    }

    $stmt->close();
    $conn->close();
}

?>
