<?php
// Sisipkan file koneksi ke database (gantilah sesuai dengan konfigurasi Anda)
include "../controller/connect.php";

// Ambil data dari POST
$id_invoice = isset($_POST['id_invoice']) ? trim($_POST['id_invoice']) : '';
$alamat_email_pelanggan = isset($_POST['alamat_email_pelanggan']) ? trim($_POST['alamat_email_pelanggan']) : '';

// Query untuk memeriksa apakah data cocok
$queryCheckData = "SELECT * FROM pesanan WHERE id_invoice = '$id_invoice' AND alamat_email_pelanggan = '$alamat_email_pelanggan'";
$resultCheckData = mysqli_query($connect, $queryCheckData);

$response = [];

if ($resultCheckData && mysqli_num_rows($resultCheckData) > 0) {
    // Jika data cocok
    $response['status'] = 'success';
} else {
    // Jika data tidak cocok
    $response['status'] = 'error';
}

// Tutup koneksi database (opsional)
mysqli_close($connect);

// Mengembalikan respons sebagai JSON
echo json_encode($response);
?>
