<?php
include "connect.php"; // Sertakan file koneksi ke database
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $tgl_awal = isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : null;
    $tgl_akhir = isset($_POST['tgl_akhir']) ? $_POST['tgl_akhir'] : null;
    $harga = isset($_POST['harga']) ? $_POST['harga'] : null;

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
    $total_harga =  $harga_paket; // Hitung total harga

    // Masukkan data ke dalam tabel pesanan
    $sql = "INSERT INTO pesanan (id_invoice, destinasi, id_pemesan, title_pelanggan, nama_depan_pelanggan, nama_belakang_pelanggan, no_telepon_pelanggan, alamat_email_pelanggan, title_tamu, nama_depan_tamu, nama_belakang_tamu, tanggal_kedatangan, tanggal_berakhir, harga_paket, total_harga, status) VALUES ('$id_invoice', '$destinasi', '$id', '$title_pelanggan', '$nama_depan_pelanggan', '$nama_belakang_pelanggan', '$no_telepon_pelanggan', '$alamat_email_pelanggan', '$title_tamu', '$nama_depan_tamu', '$nama_belakang_tamu', '$tanggal_kedatangan', '$tanggal_berakhir', '$harga_paket', '$total_harga', 0)";

    if (mysqli_query($connect, $sql)) {
        echo "<script>window.location.href = '../user/?pemesanan1';</script>";
    } else {
        echo "<script>alert('Pemesanan gagal diproses. Silakan coba lagi.');</script>";
    }
}
?>