<?php
    include "../controller/connect.php";
    if ($_SESSION['login'] != 'true') {
        header('location:views/login.php');
    }

// Set Navbar function //
$id = $_SESSION['id'];
$query_status = mysqli_query($connect, "SELECT * FROM user WHERE id='$id'");
$data_status = mysqli_fetch_assoc($query_status);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DestinEye</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    <link rel="stylesheet" href="../css/beranda.css" />
    <link rel="shortcut icon" href="../jpg/logo destineye.png" type="image/x-icon">
    
  </head>
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
  <body>
    <nav class="navbar transparent">
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
    <section id="home" class="beranda">
      <div class="home-text">
        <h5>Ayo</h5>
        <h1>
          Merencanakan Anda<br />
          Perjalanan Sendiri
        </h1>
        <p>
          Eksplorasi tanpa batas dengan aplikasi berweb kami yang inovatif.
          DestinEye membantu Anda merencanakan, mengatur, dan menjalani
          petualangan impian Anda tanpa hambatan
        </p>
        <a href="?destinasi" class="button">Pesan Perjalanan</a>
      </div>
    </section>

    <section id="destinasi" class="tour">
      <div data-aos="fade-down" data-aos-duration="1000" class="center-text">
        <h3>Destinasi</h3>
        <h2>Tur Populer</h2>
        <hr style="width: 200px" />
      </div>
      <div class="tour-content">
        <div data-aos="fade-right" data-aos-duration="1000" class="box">
          <img src="../jpg/top1.jpg" />
          <h6>Papua Barat</h6>
          <h4>Raja Ampat</h4>
        </div>

        <div data-aos="zoom-in" data-aos-duration="1000" class="box">
          <img src="../jpg/Paket Wisata Karimunjawa.jpg" /><a href="?pemesanan8"><h6>Jawa Tengah</h6>
          <h4>Karimun Jawa</h4</a>
          
        </div>

        <div data-aos="fade-left" data-aos-duration="1000" class="box">
          <img src="../jpg/top2.jpg" />
          <h6>Sumatera Utara</h6>
          <h4>Danau Toba</h4>
        </div>
      </div>
      <div data-aos="zoom-in" data-aos-duration="1000" class="center-btn">
        <a href="?destinasi" class="button">Lihat Semua Tour</a>
      </div>
    </section>

    <section class="city">
      <div class="city-content">
        <div data-aos="fade-down" data-aos-duration="1000" class="row">
          <div class="row-img">
            <img src="../jpg/jakarta1.jpg" />
          </div>
          <h4>Jakarta</h4>
        </div>

        <div data-aos="fade-up" data-aos-duration="1000" class="row">
          <div class="row-img">
            <img src="../jpg/Yogyakarta1.jpg" />
          </div>
          <h4>Yogyakarta</h4>
        </div>

        <div data-aos="fade-down" data-aos-duration="1000" class="row">
          <div class="row-img">
            <img src="../jpg/mataram1.jpg" />
          </div>
          <h4>Mataram</h4>
        </div>

        <div data-aos="fade-up" data-aos-duration="1000" class="row">
          <div class="row-img">
            <img src="../jpg/Makassar1.jpg" />
          </div>
          <h4>Makassar</h4>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" class="row">
          <div class="row-img">
            <img src="../jpg/bandung1.jpg" />
          </div>
          <h4>Bandung</h4>
        </div>
      </div>
    </section>

    <section id="blog">
      <div data-aos="fade-down" data-aos-duration="1000" class="blog-heading">
        <span>My Recent Posts</span>
        <h3>My Blog</h3>
      </div>
      <div class="blog-container">
        <div data-aos="fade-left" data-aos-duration="1600" class="blog-box">
          <div class="blog-img">
            <img src="../jpg/mandalika.jpg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>24 November 2023 / Lombok</span>
            <a href="article.html" class="blog-title"
              >Jurus InJourney Genjot Destinasi Wisata Super Prioritas di
                  Mandalika.</a
            >
            <p>
              PT Aviasi Pariwisata Indonesia atau InJourney terus berkomitmen
                untuk mengembangkan destinasi pariwisata Mandalika. Terlebih
                setelah gelaran MotoGP seri Grand Prix of Indonesia 2023 atau
                Indonesian GP 2023 yang dinilai sukses. Diketahui, sebelumnya,
                InJourney Group dengan dukungan dan kolaborasi berbagai pihak
                telah menyelenggarakan Indonesian GP yang mampu menyedot 103
                ribu penonton. Karena itu, untuk pengembangan sport tourism,
                InJourney Group pun mempersiapkan sejumlah fasilitas tambahan di
                Kawasan Ekonomi Khusus (KEK) Mandalika.
            </p>
            <a href="article.html">Read More</a>
          </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="1300" class="blog-box">
          <div class="blog-img">
            <img src="../jpg/nusantara.jpg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>26 November 2023 / Jakarta</span>
            <a href="article.html" class="blog-title"
              > Desa Senaru Juara Desa Wisata Nusantara 2023 untuk Tema Sosial Budaya</a
            >
            <p>
            Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi
              (Kemendes) merilis daftar 15 Pemenang Lomba Desa Wisata Nusantara
              2023. Desa Senaru berhasil terpilih sebagai salah satu pemenang
              dengan kategori Desa Wisata Tematik Sosial Budaya.<br /><br />
              Mengusung tagline "Berwisata Ke Desa Aja!", Lomba Desa Wisata
              Nusantara merupakan salah satu program Kemendes untuk mendorong
              perkembangan ekonomi desa dan meningkatkan kesejahteraan
              masyarakat pedesaan melalui sektor pariwisata.
            </p>
            <a href="article.html">Read More</a>
          </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" class="blog-box">
          <div class="blog-img">
            <img src="../jpg/taman1.jpg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>19 Novmeber 2023 / Jakarta</span>
            <a href="#" class="blog-title"
              >Taman Nasional Komodo, Menikmati Pesona Situs Keajaiban Dunia</a
            >
            <p>
            Dalam upaya untuk terus menghadirkan serangkaian pengalaman
                kuliner & menginap yang tak terlupakan bagi para tamu, ARTOTEL
                Suites Mangkuluhur - Jakarta menghadirkan berbagai kuliner
            </p>
            <a href="#">Read More</a>
          </div>
        </div>
        
      </div><div data-aos="fade-up" data-aos-duration="1000" class="center-btn">
        <a href="?destinasi" class="button">Lihat Semua Artikel</a>
      </div>
      
    </section>

    <section class="footer">
      <div class="up">
        <div class="rata">
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
            <h4>Get Help</h4>
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
            <h4>Follow us</h4>
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



    <div class="social">
      <a href="https://wa.me/6281246256358/"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <a class="gotopbtn" href="#"
      ><i class="fa fa-arrow-up" aria-hidden="true"></i
    ></a>
    
    <script src="script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <script>
     document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        navbar.classList.remove("transparent");
      } else {
        navbar.classList.add("transparent");
      }
    });
  });

      AOS.init();
    </script>
  </body>
</html>
