<?php
// Sisipkan file koneksi ke database (gantilah sesuai dengan konfigurasi Anda)
include "../controller/connect.php";

// Ambil data dari parameter URL
$id_invoice = isset($_GET['id_invoice']) ? trim($_GET['id_invoice']) : '';
$alamat_email_pelanggan = isset($_GET['alamat_email_pelanggan']) ? trim($_GET['alamat_email_pelanggan']) : '';

// Query untuk mengambil data pesanan berdasarkan ID invoice dan alamat email pelanggan
$queryPesanan = "SELECT * FROM pesanan WHERE id_invoice = '$id_invoice' AND alamat_email_pelanggan = '$alamat_email_pelanggan'";
$resultPesanan = mysqli_query($connect, $queryPesanan);

if ($resultPesanan && mysqli_num_rows($resultPesanan) > 0) {
    // Jika data pesanan ditemukan, ambil data
    $rowPesanan = mysqli_fetch_assoc($resultPesanan);

    // Ambil data dari pesanan
    $id_pemesan = $rowPesanan['id_pemesan'];
    $destinasi = $rowPesanan['destinasi'];
    $nama_pemesan = $rowPesanan['nama_depan_pelanggan'] . ' ' . $rowPesanan['nama_belakang_pelanggan'];
    $bank = ($_GET['bank']);
    
    // Set status pembayaran menjadi 1
    $status_pembayaran = 1;

    // Query untuk menyimpan data pembayaran ke dalam tabel "pembayaran"
    $queryInsertPembayaran = "INSERT INTO pembayaran (id_invoice, id_pemesan, destinasi, nama_pemesan, bank, status) VALUES ('$id_invoice', '$id_pemesan', '$destinasi', '$nama_pemesan', '$bank', '$status_pembayaran')";

    // Eksekusi query INSERT
    $resultInsertPembayaran = mysqli_query($connect, $queryInsertPembayaran);

    if ($resultInsertPembayaran) {
        // Jika query INSERT berhasil dieksekusi

        // Query untuk mengupdate status di tabel pesanan menjadi 1
        $queryUpdatePesanan = "UPDATE pesanan SET status = '$status_pembayaran' WHERE id_invoice = '$id_invoice' AND alamat_email_pelanggan = '$alamat_email_pelanggan'";
        
        // Eksekusi query UPDATE
        $resultUpdatePesanan = mysqli_query($connect, $queryUpdatePesanan);

        if ($resultUpdatePesanan) {
            // Jika query UPDATE berhasil dieksekusi
            echo "<script>alert('Pembayaran Berhasil, Lakukan Verifikasi Pembayaran!');</script>";
            echo "<script>window.location.href = '../user/?beranda';</script>";
        } else {
            // Jika terjadi kesalahan saat eksekusi query UPDATE
            echo "Error updating status: " . $queryUpdatePesanan . "<br>" . mysqli_error($connect);
        }
    } else {
        // Jika terjadi kesalahan saat eksekusi query INSERT
        echo "Error inserting pembayaran: " . $queryInsertPembayaran . "<br>" . mysqli_error($connect);
    }
} else {
    // Jika data pesanan tidak ditemukan
    echo "Data pesanan tidak ditemukan.";
}

// Tutup koneksi database (opsional)
mysqli_close($connect);
?>
