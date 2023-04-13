<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Include the database connection file
    require_once 'connect.php';

    // Get form data and sanitize inputs to avoid SQL injection attacks
    $first_team = mysqli_real_escape_string($conn, $_POST['ColorGroup1']);
    $second_team = mysqli_real_escape_string($conn, $_POST['ColorGroup2']);
    $sports = mysqli_real_escape_string($conn, $_POST['Event']);
    $day = mysqli_real_escape_string($conn, $_POST['Date']);
    $start_time = mysqli_real_escape_string($conn, $_POST['Time']);
    $round = mysqli_real_escape_string($conn, $_POST['Round']);
    $place = mysqli_real_escape_string($conn, $_POST['Place']);

    // Prepare the SQL statement
    $query = "INSERT INTO schecdule (Time, Date, Event, Round, Place, ColorGroup1, ColorGroup2) VALUES ('$start_time', '$day', '$sports', '$round', '$place', '$first_team', '$second_team')";

    // Execute the SQL statement
    if (mysqli_query($conn, $query)) {
        // If the data was inserted successfully, show a success message
        ?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <script>
            $(document).ready(function(){
                swal({
                    title: "เพิ่มข้อมูลสำเร็จ",
                    type: "success"
                }, function() {
                    window.location = "admin.php";
                });
            });
        </script>
        <?php
    } else {
        // If there was an error inserting the data, show an error message
        ?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <script>
            $(document).ready(function(){
                swal({
                    title: "เกิดข้อผิดพลาด",
                    type: "error"
                }, function() {
                    window.location = "admin.php";
                });
            });
        </script>
        <?php
    }

    // Close the database connection
    mysqli_close($conn);
}

?>
