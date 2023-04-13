<?php
// Make sure all the required fields are set in $_POST
$title = $_POST['title'] ?? '';
$name = $_POST['name'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$color = $_POST['color'] ?? '';
$sport = $_POST['sport'] ?? '';

// Make sure all the required fields are non-empty
if ($title && $name && $lastname && $color && $sport) {
    // Include the database connection file
    require_once 'connect.php';

    // Prepare the SQL statement
    $query = "INSERT INTO users (title, name, lastname, color, sport) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $title, $name, $lastname, $color, $sport);

    // Execute the SQL statement
    try {
        $stmt->execute();
        // If the data was inserted successfully, show a success message
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
    } catch (mysqli_sql_exception $e) {
        // If there was an error inserting the data, show an error message
        if ($e->getCode() === '23000') {
            // Duplicate entry error
            die("Error: A user with the same primary key already exists.");
        } else {
            die("Error: " . $e->getMessage());
        }
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
} else {
    // If any of the required fields are empty, show an error message
    die("Error: Please fill in all required fields.");
}
