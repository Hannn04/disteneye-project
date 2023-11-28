<?php
// Sisipkan file koneksi ke database (gantilah sesuai dengan konfigurasi Anda)
include "../controller/connect.php";

// Ambil ID invoice dari parameter URL
$id_invoice = trim($_GET['id_invoice']);

// Kueri untuk mengambil data pesanan berdasarkan ID invoice
$queryPesanan = "SELECT * FROM pesanan WHERE id_invoice = '$id_invoice'";
$resultPesanan = mysqli_query($connect, $queryPesanan);
if ($resultPesanan && mysqli_num_rows($resultPesanan) > 0) {
  // Jika kueri berhasil dan data ditemukan
  $rowPesanan = mysqli_fetch_assoc($resultPesanan);

  // Isi informasi yang diperlukan dengan data dari database
  $id_invoice = $rowPesanan['id_invoice'];
  $destinasi = $rowPesanan['destinasi'];
  $tanggal_berangkat = $rowPesanan['tanggal_kedatangan'];  
  $harga = $rowPesanan['total_harga'];
  $nama_pelanggan = $rowPesanan['nama_depan_pelanggan'];
  $title_pelanggan = $rowPesanan['title_pelanggan'];
  $nama_tamu = $rowPesanan['nama_depan_tamu'];
  $title_tamu = $rowPesanan['title_tamu'];
  $telepon = $rowPesanan['no_telepon_pelanggan'];
  $email_pemesan = $rowPesanan['alamat_email_pelanggan'];
  $status_pembayaran = $rowPesanan['status'];
} else {
  // Tangani kesalahan jika data tidak ditemukan atau kueri gagal
  echo "Error: " . $queryPesanan . "<br>" . mysqli_error($connect);
}

// Tutup koneksi database (opsional)
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <link rel="stylesheet" href="../css/transaksi.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Destin<span>Eye</span></a>

      <div class="navbar-nav">
        <a href="index.html">Beranda</a>
        <a href="tur.html">Destinasi</a>
        <a href="blog.html">Blog & News</a>
        <a href="#contact">Cek Booking</a>
      </div>
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
          <img src="../jpg/goa.webp" alt="" />
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
              <td>5 Day</td>
            </tr>
            <tr>
              <td><b>Berangkat</b></td>
              <td><?php echo $tanggal_berangkat; ?></td>
            </tr>
            <tr>
              <td><b>Tamu</b></td>
              <td>1 Orang</td>
            </tr>
            <tr>
              <td><b>Harga</b></td>
              <td>Rp 2.800.000/Pax</td>
            </tr>
          </table>
          <br />
          <div class="total">
            <strong>Total <font>Rp 2.800.000</font></strong>
          </div>
          <div class="status">
            <b>Status <span style="color: #ff6900">UNPAID</span></b>
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
              <td>Rp 2.800.000/Pax</td>
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
    <section class="pembayaran">
      <div class="detail-tamu"><b>Pembayaran</b></div>
      <div class="tabel">
        <form>
          <div class="bayar">
            Yang harus dibayar.<br /><span
              ><b
                >Full Payment
                <font color="#f75400" style="font-size: 20px; margin-left: 10px"
                  >Rp 2.800.000</font
                ></b
              ></span
            >
          </div>
          <div class="pilih-pembayaran">
            <p>Silahkan pilih payment channel di bawah ini:</p>
            <br /><br />
            <label class="payment-option">
              <input type="radio" name="payment_channel" /> BNI Virtual Account </label
            ><br /><br />
            <label class="payment-option">
              <input type="radio" name="payment_channel" /> BRI Virtual Account </label
            ><br /><br />
            <label class="payment-option">
              <input type="radio" name="payment_channel" /> Mandiri Virtual
              Account </label
            ><br /><br />
            <label class="payment-option">
              <input type="radio" name="payment_channel" /> BCA Virtual Account </label
            ><br /><br />
            <label class="payment-option">
              <input type="radio" name="payment_channel" /> BSI Virtual Account </label
            ><br /><br />
            <label class="payment-option">
              <input type="radio" name="payment_channel" /> OVO </label
            ><br /><br />
            <label class="payment-option">
              <input type="radio" name="payment_channel" /> ShopeePay </label
            ><br /><br />
            <button>Bayar Sekarang</button>
          </div>
        </form>
        <div class="transaksi" style="display:none;">
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
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../js/script.js"></script>
  </body>
</html>
