<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konfirmasi Pemesanan</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include jQuery UI library -->
    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
    />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <link rel="stylesheet" href="../css/form.css" />
    <link rel="shortcut icon" href="../jpg/logo destineye.png" type="image/x-icon">
    <style>
    .navbar.scrolled {
  background-color: rgba(1, 1, 1, 0.8); /* Add your desired background color */
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
      <!-- Nav Item - User Information -->
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
        <h1>Konfirmasi Pembayaran</h1>
        <p>
          Segera lakukan konfirmasi pembayaran agar orderan Anda dapat segera
          kami proses. Mudah & Cepat!
        </p>
      </div>
    </section>
    <section class="article">
      <div class="article">
        <div class="article-left">
          <div class="article-text">
                  <form action="../controller/proses_konfirmasi_pembayaran.php" method="post" enctype="multipart/form-data">
            <h2>Formulir Konfirmasi</h2>
            <p>
                Isi data dengan benar untuk mempermudah kami memverifikasi konfirmasi Anda
            </p>
            <div class="formulir">
                <input type="text" name="invoice_id" placeholder="Invoice Id" />
                <input type="date" name="transfer_date" id="birthdate" />
                <input type="text" name="jumlah_transfer" placeholder="Jumlah Transfer, contoh: 500.000" />
                <select name="virtual_account_type" id="virtual_account_type">
                    <option value="BNI Virtual Account">BNI Virtual Account</option>
                    <option value="BRI Virtual Account">BRI Virtual Account</option>
                    <option value="Mandiri Virtual Account">Mandiri Virtual Account</option>
                    <option value="BCA Virtual Account">BCA Virtual Account</option>
                    <option value="BSI Virtual Account">BSI Virtual Account</option>
                    <option value="OVO">OVO</option>
                    <option value="ShopeePay">ShopeePay</option>
                </select>
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap Anda" />
                <input type="text" name="nomor_hp" placeholder="Nomor Hp Anda" />
                <input type="text" name="email" placeholder="Email Anda" />
                <label for="bukti_pembayaran">Bukti Pembayaran</label><br />
                <input type="file" name="bukti_pembayaran" class="upload-box" /><br />

                <button type="submit">Submit Konfirmasi</button>
            </div>
        </form>
          </div>
        </div>
        <div class="right">
          <img src="../jpg/bni.png" alt="" />
          <img src="../jpg/bri.webp" alt="" />
          <img src="../jpg/mandiri.webp" alt="" />
          <img src="../jpg/bca.webp" alt="" />
          <img src="../jpg/bsi.png" alt="" />
          <img src="../jpg/ovo.png" alt="" />
          <img src="../jpg/pay.png" alt="" />
        </div>
      </div>
    </section>
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Company</h4>
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Our Service</a></li>
              <li><a href="">privacy policy</a></li>
              <li><a href="">Management Team</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="">FAQ</a></li>
              <li><a href="">Booking Guide</a></li>
              <li><a href="">Purchase Process</a></li>
              <li><a href="">Customer Support</a></li>
              <li><a href="">Payment Options</a></li>
              <li><a href="">Site Use Instructions</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Other</h4>
            <ul>
              <li><a href="">Terms And Conditions</a></li>
              <li><a href="">Help Center</a></li>
              <li><a href="">DestinEye blog</a></li>
              <li><a href="">License and Copyright</a></li>
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
    <div class="social">
      <a href="https://wa.me/6281246256358/"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <script src="script.js"></script>
  </body>
</html>
