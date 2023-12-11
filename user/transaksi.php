<?php
// Sisipkan file koneksi ke database (gantilah sesuai dengan konfigurasi Anda)
include "../controller/connect.php";

// Ambil ID invoice dari parameter URL
// Ambil ID invoice dan alamat email pelanggan dari parameter URL
$id_invoice = isset($_GET['id_invoice']) ? trim($_GET['id_invoice']) : '';
$alamat_email_pelanggan = isset($_GET['alamat_email_pelanggan']) ? trim($_GET['alamat_email_pelanggan']) : '';

// Kueri untuk mengambil data pesanan berdasarkan ID invoice
// Kueri untuk mengambil data pesanan berdasarkan ID invoice dan alamat email pelanggan
$queryPesanan = "SELECT * FROM pesanan WHERE id_invoice = '$id_invoice' AND alamat_email_pelanggan = '$alamat_email_pelanggan'";


$resultPesanan = mysqli_query($connect, $queryPesanan);
if ($resultPesanan && mysqli_num_rows($resultPesanan) > 0) {
  // Jika kueri berhasil dan data ditemukan
  $rowPesanan = mysqli_fetch_assoc($resultPesanan);

  // Isi informasi yang diperlukan dengan data dari database
  $id_invoice = $rowPesanan['id_invoice'];
  $destinasi = $rowPesanan['destinasi'];
  $tanggal_kedatangan_str = $rowPesanan['tanggal_kedatangan'];
$tanggal_berakhir_str = $rowPesanan['tanggal_berakhir'];



// Mapping non-English month names to English month names
$month_names = [
    'Januari' => 'January',
    'Februari' => 'February',
    'Maret' => 'March',
    'April' => 'April',
    'Mei' => 'May',
    'Juni' => 'June',
    'Juli' => 'July',
    'Agustus' => 'August',
    'September' => 'September',
    'Oktober' => 'October',
    'November' => 'November',
    'Desember' => 'December',
];

// Replace non-English month names with English month names
$tanggal_kedatangan_str = strtr($tanggal_kedatangan_str, $month_names);
$tanggal_berakhir_str = strtr($tanggal_berakhir_str, $month_names);

// Konversi string ke objek DateTime
$tanggal_kedatangan = DateTime::createFromFormat('d F Y', $tanggal_kedatangan_str);
$tanggal_berakhir = DateTime::createFromFormat('d F Y', $tanggal_berakhir_str);

// Periksa apakah parsing berhasil

    $durasi = $tanggal_kedatangan->diff($tanggal_berakhir);

    // Mengambil jumlah hari dari selisih tanggal
    $durasi_hari = $durasi->days;

   

  $harga_paket = $rowPesanan['harga_paket'];
  $total_harga = $rowPesanan['total_harga'];
  $nama_pelanggan = $rowPesanan['nama_depan_pelanggan'];
  $title_pelanggan = $rowPesanan['title_pelanggan'];
  $nama_tamu = $rowPesanan['nama_depan_tamu'];
  $title_tamu = $rowPesanan['title_tamu'];
  $telepon = $rowPesanan['no_telepon_pelanggan'];
  $email_pemesan = $rowPesanan['alamat_email_pelanggan'];
  $status = $rowPesanan['status'];
} else {
  // Tangani kesalahan jika data tidak ditemukan atau kueri gagal
  echo "Error: " . $queryPesanan . "<br>" . mysqli_error($connect);
}

// Tutup koneksi database (opsional)
mysqli_close($connect);
?>
<style>
  .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 1000;
    text-align: center;
  }

  .popup-content {
    margin-bottom: 15px;
  }

  #countdownTimer {
    font-size: 24px;
    color: #333;
    font-weight: bold;
  }


    /* Navbar styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
   /* Ganti dengan warna latar belakang yang diinginkan */
  padding: 15px;
  color: white; /* Ganti dengan warna teks yang diinginkan */
}

.navbar-logo {
  font-size: 24px;
  font-weight: bold;
  text-decoration: none;
  color: white; /* Ganti dengan warna teks yang diinginkan */
}

.navbar-logo span {
  color: #FFD700; /* Warna span di dalam logo */
}

.navbar-nav {
  display: flex;
}

.navbar-nav a {
  margin: 0 15px;
  text-decoration: none;
  color: white; /* Ganti dengan warna teks yang diinginkan */
}

/* Dropdown styles */
.nav-item.dropdown {
  position: relative;
}

.nav-link.dropdown-toggle {
  cursor: pointer;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  right: 0;
  background-color: #333; /* Ganti dengan warna latar belakang yang diinginkan */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border: none;
  z-index: 1000;
  display: none;
}

.nav-item.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-item {
  color: white; /* Ganti dengan warna teks yang diinginkan */
}

.dropdown-item:hover {
  background-color: #555; /* Ganti dengan warna latar belakang saat dihover */
}


 
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DestinEye</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link rel="stylesheet" href="../css/transaksiii.css" />
    <link rel="shortcut icon" href="../jpg/logo destineye.png" type="image/x-icon">
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Destin<span>Eye</span></a>

      <div class="navbar-nav">
        <a href="?beranda">Beranda</a>
        <a href="?destinasi">Destinasi</a>
        <a href="blog.html">Blog & News</a>
        <a href="?booking">Cek Booking</a>
        <a href="?konfirmasi">Konfirmasi Pembayaran</a>

      </div>
      <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 large"><?= $_SESSION['nama'] ?></span>
                            <img class="img-profile rounded-circle">
                                 
                        </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../auth/" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

    </nav>
    <section class="marq">
      <div class="marquee">
        <marquee class="text-heading"
          ><font><b>Promo</b></font> Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Qui deserunt facilis porro obcaecati sit et vitae,
          voluptas hic, dolores est laborum? Numquam non fugit eveniet saepe,
          vitae harum? Eligendi, voluptas?
        </marquee>
      </div>
    </section>

    <section class="heading">
      <div class="text-heading">
        <h1>ID INVOICE: <?php echo $id_invoice; ?> </h1>
        <p>Gunakan form dibawah ini untuk melihat detail booking Anda.</p>
      </div>
    </section>
    <section class="detail">
      <div class="detail-tamu"><b>Detail Tamu</b></div>
      <div class="table">
        <div class="table-left">
          <img src="../jpg/<?php echo $destinasi; ?>.webp" alt="" />
          <p style="float: right; width: 65%">
            <span style="font-size: 16px">Invoice ID :</span>
            <span style="color: #ff6900; font-size: 16px"><b><?php echo $id_invoice; ?></b></span
            ><br /><br /><span style="color: #0080ff; font-size: 20px"
              ><b><?php echo $destinasi; ?></b></span
            >
          </p>
          <table>
            <tr>
              <td><b>Durasi</b></td>
              <td><?php echo $durasi_hari; ?> Day</td>
            </tr>
            <tr>
              <td><b>Berangkat</b></td>
              <td><?php echo $tanggal_kedatangan_str; ?></td>
            </tr>
            <tr>
              <td><b>Tamu</b></td>
              <td>1 Orang</td>
            </tr>
            <tr>
              <td><b>Harga Paket</b></td>
              <td><?php echo $harga_paket; ?></td>
            </tr>
          </table>
          <br />
          <div class="total">
            <strong>Total <font><?php echo $total_harga; ?></font></strong>
          </div>
          <div class="status">
    <b>Status 
        <?php
        if ($status == 1) {
          echo "<span style='color: #ff6900'>ON VERIFICATION</span>";
        }
        elseif ($status == 2) {
          echo "<span style='color:#008000'>SUCCESS</span>";
        }
        elseif ($status == 3) {
          echo "<span style='color:#ff0000'>FAILED</span>";
        } else {
          echo "UNPAID";
        }
        ?>
   </b>
</div>

        </div>
        <div class="table-right">
          <div class="text">
            <i class="fa fa-user" aria-hidden="true"></i
            ><span><b>Pemesan</b></span>
          </div>
          <table>
            <tr>
              <td><b>Nama</b></td>
              <td><?php echo $title_pelanggan; ?> <b><?php echo $nama_pelanggan; ?></b></td>
            </tr>
            <tr>
              <td><b>Telpon/Hp</b></td>
              <td><?php echo $telepon; ?></td>
            </tr>
            <tr>
              <td><b>Email</b></td>
              <td><?php echo $email_pemesan; ?></td>
            </tr>
            <tr>
              <td><b>Harga</b></td>
              <td><?php echo $harga_paket; ?>/days</td>
            </tr>
          </table>
          <div class="daftar">
            <span class="list"
              ><i class="fa fa-list-alt" aria-hidden="true"></i
              ><b>Daftar Tamu</b></span
            >
          </div>
          <div><?php echo $title_tamu; ?> <b><?php echo $nama_tamu; ?></b></div>
        </div>
      </div>
    </section>
    <?php
include '../controller/connect.php';

// Assume $id_invoice is the ID invoice you want to check
if (isset($_GET['id_invoice'])) {
    $id_invoice = $_GET['id_invoice'];

    // Fetch the status from the pesanan table
    $queryStatus = "SELECT status FROM pesanan WHERE id_invoice = '$id_invoice'";
    $resultStatus = mysqli_query($connect, $queryStatus);

    if ($resultStatus) {
        $row = mysqli_fetch_assoc($resultStatus);
        $status = $row['status'];

        // Check if the status is 0 or 1
        if ($status == 0) {
            // Display the section
            echo '<section class="pembayaran">';
            echo '<div class="detail-tamu"><b>Pembayaran</b></div>';
            echo '<div class="tabel">';
            echo '<form>';
            echo '<div class="bayar">Yang harus dibayar.<br /><span><b>Full Payment<font color="#f75400" style="font-size: 20px; margin-left: 10px">Rp 2.800.000</font></b></span></div>';
            echo '</form>';
            echo '<div class="pilih-pembayaran">';
            echo '<p>Silahkan pilih payment channel di bawah ini:</p>';
            echo '<br /><br />';
            echo '<label class="payment-option"><input type="radio" name="payment_channel" value="BNI Virtual Account" /> BNI Virtual Account </label><br /><br />';
            echo '<label class="payment-option"><input type="radio" name="payment_channel" value="BRI Virtual Account" /> BRI Virtual Account </label><br /><br />';
            echo '<label class="payment-option"><input type="radio" name="payment_channel" value="Mandiri Virtual Account" /> Mandiri Virtual Account </label><br /><br />';
            echo '<label class="payment-option"><input type="radio" name="payment_channel" value="BCA Virtual Account" /> BCA Virtual Account </label><br /><br />';
            echo '<label class="payment-option"><input type="radio" name="payment_channel" value="BSI Virtual Account" /> BSI Virtual Account </label><br /><br />';
            echo '<label class="payment-option"><input type="radio" name="payment_channel" value="OVO" /> OVO </label><br /><br />';
            echo '<label class="payment-option"><input type="radio" name="payment_channel" value="Shoppepay" /> ShopeePay </label><br /><br />';
            echo '<button id="btnBayarSekarang">Bayar Sekarang</button>';
            echo '</div>';
            echo '</div>';
           
        }
    }
} else {
    // Handle the case when ID invoice is not provided
    echo "ID invoice is not provided";
}

// Close the database connection
$connect->close();
?>

       
        <div class="transaksi" id="tutorTransaksi" style="display:none">
          <p><b>BNI VIRTUAL ACCOUNT</b></p>
          <ul style="font-size: 16px">
            <li>
              Kode bayar
              <span
                style="font-size: 13px; background-color: #ececec; padding: 5px"
                >578292829208</span
              >
            </li>

            <li>Berikut ini cara pembayaran yang dapat Anda lakukan:</li>
          </ul>
          <br />
          <p><b>Internet Banking</b></p>

          <ul style="font-size: 15px">
            <li>Login ke internet banking Bank BNI Anda</li>

            <li>
              Pilih menu <b>Transaksi</b> lalu klik menu
              <b>Virtual Account Billing</b>
            </li>

            <li>
              Masukkan Nomor VA (<b>578292829208</b>) lalu pilih
              <b>Rekening Debit</b>
            </li>

            <li>
              Detail transaksi akan ditampilkan, pastikan data sudah sesuai
            </li>

            <li>Masukkan respon key BNI appli 2</li>

            <li>Transaksi sukses, simpan bukti transaksi Anda</li>
          </ul>
          <br /><br />

          <p><b>Transfer melalui Internet Banking BCA</b></p>

<ul style="font-size: 15px">
    <li>Login ke Internet Banking BCA Anda</li>

    <li>
        Pilih menu <b>Transfer</b> dan klik <b>Virtual Account</b>
    </li>

    <li>
        Pilih <b>BCA Virtual Account</b> sebagai tujuan transfer
    </li>

    <li>
        Masukkan Nomor VA (<b>1234567890</b>) dan pilih <b>Rekening Debit</b>
    </li>

    <li>
        Detail transaksi akan ditampilkan, pastikan data sudah sesuai
    </li>

    <li>
        Masukkan respon key BCA appli 2 (jika diperlukan)
    </li>

    <li>
        Klik <b>Submit</b> atau <b>Lanjutkan</b> untuk menyelesaikan transaksi
    </li>

    <li>
        Simpan bukti transaksi Anda
    </li>
</ul>
<br /><br />

<p><b>Transfer melalui Aplikasi OVO</b></p>

<ul style="font-size: 15px">
    <li>Buka aplikasi OVO di ponsel Anda</li>

    <li>
        Pilih menu <b>Transfer</b>
    </li>

    <li>
        Masukkan Nomor Penerima (<b>08123456789</b>) atau pilih dari daftar kontak Anda
    </li>

    <li>
        Masukkan Jumlah Transfer (<b>Rp 2.800.000</b>)
    </li>

    <li>
        Pilih <b>Lanjut</b> atau <b>Submit</b>
    </li>

    <li>
        Konfirmasi transaksi dan masukkan PIN OVO Anda
    </li>

    <li>
        Transfer berhasil, simpan bukti transaksi Anda
    </li>
</ul>
<br /><br />

<p><b>Transfer melalui Internet Banking Mandiri</b></p>

<ul style="font-size: 15px">
    <li>Login ke Internet Banking Mandiri Anda</li>

    <li>
        Pilih menu <b>Bayar</b> dan klik <b>Multi Payment</b>
    </li>

    <li>
        Pilih <b>Mandiri Virtual Account</b> sebagai tujuan transfer
    </li>

    <li>
        Masukkan Nomor VA (<b>1234567890</b>) dan jumlah tagihan
    </li>

    <li>
        Detail transaksi akan ditampilkan, pastikan data sudah sesuai
    </li>

    <li>
        Masukkan respon key Mandiri Secure Access (jika diperlukan)
    </li>

    <li>
        Klik <b>Submit</b> atau <b>Lanjutkan</b> untuk menyelesaikan transaksi
    </li>

    <li>
        Simpan bukti transaksi Anda
    </li>
</ul>
<br /><br />

<p><b>Transfer melalui Internet Banking BSI</b></p>

<ul style="font-size: 15px">
    <li>Login ke Internet Banking BSI Anda</li>

    <li>
        Pilih menu <b>Transfer</b> dan klik <b>Virtual Account</b>
    </li>

    <li>
        Pilih <b>BSI Virtual Account</b> sebagai tujuan transfer
    </li>

    <li>
        Masukkan Nomor VA (<b>1234567890</b>) dan jumlah tagihan
    </li>

    <li>
        Detail transaksi akan ditampilkan, pastikan data sudah sesuai
    </li>

    <li>
        Masukkan PIN atau token transaksi BSI Anda
    </li>

    <li>
        Klik <b>Submit</b> atau <b>Lanjutkan</b> untuk menyelesaikan transaksi
    </li>

    <li>
        Simpan bukti transaksi Anda
    </li>
</ul>
<br /><br />
<p><b>Transfer melalui Internet Banking BRI</b></p>

<ul style="font-size: 15px">
    <li>Login ke Internet Banking BRI Anda</li>

    <li>
        Pilih menu <b>Transfer</b> dan klik <b>Virtual Account</b>
    </li>

    <li>
        Pilih <b>BRI Virtual Account</b> sebagai tujuan transfer
    </li>

    <li>
        Masukkan Nomor VA (<b>1234567890</b>) dan jumlah tagihan
    </li>

    <li>
        Detail transaksi akan ditampilkan, pastikan data sudah sesuai
    </li>

    <li>
        Masukkan PIN atau token transaksi BRI Anda
    </li>

    <li>
        Klik <b>Submit</b> atau <b>Lanjutkan</b> untuk menyelesaikan transaksi
    </li>

    <li>
        Simpan bukti transaksi Anda
    </li>
</ul>
<br /><br />

<p><b>Transfer melalui Aplikasi ShopeePay</b></p>

<ul style="font-size: 15px">
    <li>Buka aplikasi ShopeePay di ponsel Anda</li>

    <li>
        Pilih menu <b>Bayar</b> atau <b>Transfer</b>
    </li>

    <li>
        Pilih penerima dengan mencari akun ShopeePay atau masukkan Nomor HP/Nama Pengguna ShopeePay
    </li>

    <li>
        Masukkan Jumlah Transfer (<b>Rp 2.800.000</b>)
    </li>

    <li>
        Pilih <b>Lanjut</b> atau <b>Submit</b>
    </li>

    <li>
        Konfirmasi transaksi dan masukkan PIN ShopeePay Anda
    </li>

    <li>
        Transfer berhasil, simpan bukti transaksi Anda
    </li>
</ul>
<br /><br />

          <p><b>ATM BNI</b></p>

          <ul style="font-size: 15px">
            <li>Masukkan kartu Anda</li>

            <li>Pilih Bahasa</li>

            <li>Masukkan PIN ATM Anda</li>
            <li>Kemudian, pilih <b>Menu Lainnya</b></li>

            <li>
              Pilih <b>Transfer</b> dan pilih jenis rekening yang akan digunakan
              (Contoh: Dari rekening Tabungan)
            </li>

            <li>
              Pilih Virtual Account Billing. Masukkan Nomor VA
              (<b>578292829208</b>)
            </li>

            <li>
              Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi
            </li>

            <li>Konfirmasi, apabila telah selesai, lanjutkan transaksi</li>
            <li>Transaksi Anda telah selesai</li>
          </ul>
          <br /><br />

          <p><b>Mobile Banking BNI</b></p>
          <ul style="font-size: 15px">
            <li>
              Akses BNI Mobile Banking dari handphone kemudian masukkan
              <b>User ID dan Password</b>
            </li>

            <li>Pilih menu <b>Transfer</b></li>

            <li>
              Pilih menu <b>Virtual Account Billing</b> kemudian pilih rekening
              debet
            </li>
            <li>Masukkan Nomor <b>Virtual Account</b></li>

            <li>
              Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi
            </li>

            <li>Konfirmasi transaksi dan masukkan Password Transaksi</li>

            <li>Pembayaran Anda Telah Berhasil</li>
          </ul>
        </div>
      </div>
</div>

    </section>

    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="">about us</a></li>
              <li><a href="">our service</a></li>
              <li><a href="">privacy policy</a></li>
              <li><a href="">affiliate program</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="">FAQ</a></li>
              <li><a href="">shipping</a></li>
              <li><a href="">terurns</a></li>
              <li><a href="">order status</a></li>
              <li><a href="">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="">watch</a></li>
              <li><a href="">bag</a></li>
              <li><a href="">shoes</a></li>
              <li><a href="">dress</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="https://instagram.com/destin_eye?igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../js/script.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
  var btnBayarSekarang = document.getElementById('btnBayarSekarang');
  var countdownPopup = document.getElementById('countdownPopup');
  var countdownTimer = document.getElementById('countdownTimer');
  var btnYa = document.getElementById('btnYa');
  var btnTidak = document.getElementById('btnTidak');
  var countdownTime = 2400; // 40 minutes in seconds
  var tutorTransaksiDiv = document.getElementById('tutorTransaksi');

  var idInvoice = '<?php echo $id_invoice; ?>';
  var alamatEmail = '<?php echo $alamat_email_pelanggan; ?>';

  btnBayarSekarang.addEventListener('click', function () {
    // Display the countdown popup
    tutorTransaksiDiv.style.display = 'block';
    countdownPopup.style.display = 'block';
    

    // Start the countdown
    startCountdown();
  });

  btnYa.addEventListener('click', function () {
    var selectedBank = document.querySelector('input[name="payment_channel"]:checked');
    // Handle the action when "YA" button is clicked
    // You can customize this part based on your requirements
    if (selectedBank) {
    // Handle the action when "YA" button is clicked
    // You can customize this part based on your requirements
    window.location.href = '../user/?proses_pembayaran&id_invoice=' + idInvoice + '&alamat_email_pelanggan=' + alamatEmail + '&bank=' + selectedBank.value;
  } else {
    alert('Pilih metode pembayaran terlebih dahulu.');
  }
  });

  btnTidak.addEventListener('click', function () {
    // Handle the action when "TIDAK" button is clicked
    // You can customize this part based on your requirements
    alert('Pembayaran belum dilakukan.');
  });

  function startCountdown() {
    var timer = setInterval(function () {
      var minutes = Math.floor(countdownTime / 60);
      var seconds = countdownTime % 60;

      countdownTimer.textContent = formatTime(minutes) + ':' + formatTime(seconds);

      if (countdownTime <= 0) {
        
        // Countdown has finished, close the popup
        clearInterval(timer);
        countdownPopup.style.display = 'none';
      } else {
        countdownTime--;
      }
    }, 1000);
  }

  function formatTime(time) {
    return time < 10 ? '0' + time : time;
  }
});
</script>

<div id="countdownPopup" class="popup">
  <div class="popup-content">
    <h4>Segera Lakukan Pembayaran</h4>
    <p>Waktu countdown</p>
    <span id="countdownTimer">40:00</span>
    <div>
      <button style=" margin: 2px;
    padding: 15px 30px;
    font-size: 16px;" id="btnYa">Yes</button>
      <button style=" margin: 2px;
    padding: 15px 30px;
    font-size: 16px;" id="btnTidak">No</button>
    </div>
  </div>
</div>
<script>
    $(document).ready(function() {
        // Fungsi saat tombol "Ya" ditekan
        $("#btnYa").click(function() {
            // Arahkan ke proses_pembayaran.php
            window.location.href = "proses_pembayaran.php";
        });

        // Fungsi saat tombol "Tidak" ditekan
        $("#btnTidak").click(function() {
            // Arahkan ke proses_pembayaran_gagal.php
            window.location.href = "proses_pembayaran_gagal.php";
        });
    });
</script>
  </body>
</html>
