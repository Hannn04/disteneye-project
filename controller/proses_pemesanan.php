<?php
include "connect.php"; // Sertakan file koneksi ke database
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $tgl_awal = isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : null;
    $tgl_akhir = isset($_POST['tgl_akhir']) ? $_POST['tgl_akhir'] : null;
    $harga = isset($_POST['harga']) ? $_POST['harga'] : null;
    $hargaTotal = isset($_POST['hargaTotal']) ? $_POST['hargaTotal'] : null;


    $id = $_SESSION['id'];
    $destinasi = $_POST["destinasi"];
    $id_invoice = 'DST' . rand();
    $title_pelanggan = $_POST["title_pelanggan"];
    $nama_depan_pelanggan = $_POST["nama_depan_pelanggan"];
    $nama_belakang_pelanggan = $_POST["nama_belakang_pelanggan"];
    $no_telepon_pelanggan = $_POST["no_telepon_pelanggan"];
    $alamat_email_pelanggan = $_POST["alamat_email_pelanggan"];
    $title_tamu = $_POST["title_tamu"];
    $nama_depan_tamu = $_POST["nama_depan_tamu"];
    $nama_belakang_tamu = $_POST["nama_belakang_tamu"];
    $tanggal_kedatangan = $_POST["tgl_awal"];
    $tanggal_berakhir = $_POST["tgl_akhir"];

    $harga_paket = $_POST["harga"];
    $total_harga =  $_POST["hargaTotal"];

    // Masukkan data ke dalam tabel pesanan
    $sql = "INSERT INTO pesanan (id_invoice, destinasi, id_pemesan, title_pelanggan, nama_depan_pelanggan, nama_belakang_pelanggan, no_telepon_pelanggan, alamat_email_pelanggan, title_tamu, nama_depan_tamu, nama_belakang_tamu, tanggal_kedatangan, tanggal_berakhir, harga_paket, total_harga, status) VALUES ('$id_invoice', '$destinasi', '$id', '$title_pelanggan', '$nama_depan_pelanggan', '$nama_belakang_pelanggan', '$no_telepon_pelanggan', '$alamat_email_pelanggan', '$title_tamu', '$nama_depan_tamu', '$nama_belakang_tamu', '$tanggal_kedatangan', '$tanggal_berakhir', '$harga_paket', '$total_harga', 0)";

    // Jalankan query SQL
    if (mysqli_query($connect, $sql)) {
        // Dapatkan ID Invoice yang baru saja dimasukkan
        $last_inserted_id = mysqli_insert_id($connect);

        // Query tambahan untuk mendapatkan nilai id_invoice yang baru saja dimasukkan
        $queryGetIdInvoice = "SELECT id_invoice FROM pesanan WHERE no = $last_inserted_id";
        $resultGetIdInvoice = mysqli_query($connect, $queryGetIdInvoice);

        if ($resultGetIdInvoice && mysqli_num_rows($resultGetIdInvoice) > 0) {
            $rowGetIdInvoice = mysqli_fetch_assoc($resultGetIdInvoice);
            $id_invoice_baru = $rowGetIdInvoice['id_invoice'];
            
            // Set marker pesanan berhasil ke sesi
            $_SESSION['pesanan_berhasil'] = true;
            $_SESSION['invoice_id'] = $id_invoice_baru; // Simpan ID invoice ke dalam sesi
            // Redirect ke halaman pemesanan1
            echo "<script>window.location.href = '../user/?pemesanan1';</script>";
        } else {
            // Handle error jika query untuk mendapatkan id_invoice gagal
            echo "<script>alert('Error in fetching id_invoice.');</script>";
        }
    } else {
        echo "<script>alert('Pemesanan gagal diproses. Silakan coba lagi.');</script>";
    }
}
?>
