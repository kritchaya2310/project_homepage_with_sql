<?php
if (isset($_GET['id_medal'])) {
    require_once 'connect.php';

    $id_medal = $_GET['id_medal'];

    $sql = 'DELETE FROM medal WHERE id_medal = ?';
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id_medal);
    mysqli_stmt_execute($stmt);

    echo '
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if (mysqli_affected_rows($conn) == 1) {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "ลบข้อมูลสำเร็จ",
                    type: "success"
                }, function() {
                    window.location = "admin.php";
                });
            }, 1000);
        </script>';
    } else {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "เกิดข้อผิดพลาด",
                    type: "error"
                }, function() {
                    window.location = "admin.php";
                });
            }, 1000);
        </script>';
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
