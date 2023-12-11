<?php
// Sertakan file koneksi ke database
include "../controller/connect.php";

// Inisialisasi pesan error
$errors = [];

// Fungsi untuk membersihkan dan memvalidasi input
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Proses formulir saat di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $invoiceId = validateInput($_POST["invoice_id"]);
    $transferDate = validateInput($_POST["transfer_date"]);
    $jumlahTransfer = validateInput($_POST["jumlah_transfer"]);
    $virtualAccountType = validateInput($_POST["virtual_account_type"]);
    $namaLengkap = validateInput($_POST["nama_lengkap"]);
    $nomorHp = validateInput($_POST["nomor_hp"]);
    $email = validateInput($_POST["email"]);

    // Handling upload bukti pembayaran
    $uploadDir = '../uploads/'; // Direktori tempat menyimpan bukti pembayaran
$buktiPembayaranPath = '';

if (isset($_FILES["bukti_pembayaran"]) && $_FILES["bukti_pembayaran"]["error"] == 0) {
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $extension = pathinfo($_FILES['bukti_pembayaran']['name'], PATHINFO_EXTENSION);

    if (in_array($extension, $allowedExtensions)) {
        // Ganti nama file dengan format "invoice+namapemesan"
        $namaPemesan = validateInput($_POST["nama_lengkap"]);
        $namaFileBaru =  $invoiceId . "_" . $namaPemesan . '.' . $extension;
        $buktiPembayaranPath = $uploadDir . $namaFileBaru;
        move_uploaded_file($_FILES['bukti_pembayaran']['tmp_name'], $buktiPembayaranPath);
    } else {
        $errors[] = "File gambar tidak valid. Hanya file dengan ekstensi jpg, jpeg, png, atau gif yang diizinkan.";
    }
} else {
    $errors[] = "Upload bukti pembayaran gagal.";
}

    // Simpan data ke database jika tidak ada error
    if (empty($errors)) {
        // Query untuk memasukkan data ke tabel konfirmasipembayaran
        $query = "INSERT INTO konfirmasipembayaran (invoice_id, transfer_date, jumlah_transfer, virtual_account_type, nama_lengkap, nomor_hp, email, bukti_pembayaran_path)
                  VALUES ('$invoiceId', '$transferDate', '$jumlahTransfer', '$virtualAccountType', '$namaLengkap', '$nomorHp', '$email', '$buktiPembayaranPath')";

        // Eksekusi query
        if ($connect->query($query) === TRUE) {
            echo "<script>alert('Konfirmasi Pembayaran Berhasil Diajukan!');</script>";
        echo "<script>window.location.href = '../user/?beranda';</script>";
        } else {
            echo "Error: " . $query . "<br>" . $connect->error;
        }

        // Tutup koneksi
        $connect->close();
    } else {
        // Tampilkan pesan error
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
