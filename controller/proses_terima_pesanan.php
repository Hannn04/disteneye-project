<?php
include 'connect.php';

// Cek apakah parameter Id ada di URL
if (isset($_GET['id_invoice'])) {
    $id_invoice = $_GET['id_invoice'];

    // Update status pesanan menjadi 2
    $queryUpdateStatus = "UPDATE pesanan SET status = 2 WHERE id_invoice = '$id_invoice'";


    $resultUpdateStatus = mysqli_query($connect, $queryUpdateStatus);

    if ($resultUpdateStatus) {
        // Redirect ke halaman dengan status berhasil
        header('Location: ../admin/?pesanan&status=success');
        exit();
    } else {
        // Redirect ke halaman dengan status gagal
        header('Location: ../admin/?pesanan&status=failed');
        exit();
    }
} else {
    // Jika parameter Id tidak ada di URL, redirect ke halaman utama
    header('Location: ../admin/course.php');
    exit();
}
?>
