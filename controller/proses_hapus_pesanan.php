<?php
include 'connect.php';

// Cek apakah parameter ID Invoice ada di URL
if (isset($_GET['id_invoice'])) {
    $id_invoice = $_GET['id_invoice'];

    // Hapus pesanan berdasarkan ID Invoice
    $queryHapusPesanan = "DELETE FROM pesanan WHERE id_invoice = '$id_invoice'";

    $resultHapusPesanan = mysqli_query($connect, $queryHapusPesanan);

    if ($resultHapusPesanan) {
        // Redirect ke halaman dengan status berhasil
        header('Location: ../admin/?pesanan&status=success');
        exit();
    } else {
        // Redirect ke halaman dengan status gagal
        header('Location: ../admin/?pesanan&status=failed');
        exit();
    }
} else {
    // Jika parameter ID Invoice tidak ada di URL, redirect ke halaman utama
    header('Location: ../admin/course.php');
    exit();
}
?>
