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
    <title>Document</title>
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
    <link rel="stylesheet" href="../css/style.css" />
    
  </head>
  <style>
    /* Navbar styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #333; /* Ganti dengan warna latar belakang yang diinginkan */
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
    <nav class="navbar">
      <a href="#" class="navbar-logo">Destin<span>Eye</span></a>

      <div class="navbar-nav">
        <a href="?beranda">Beranda</a>
        <a href="?destinasi">Destinasi</a>
        <a href="blog.html">Blog & News</a>
        <a href="#?booking">Cek Booking</a>
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
      <div class="center-text">
        <h3>Destinasi</h3>
        <h2>Tur Populer</h2>
        <hr style="width: 200px" />
      </div>
      <div class="tour-content">
        <div class="box">
          <img src="../jpg/top1.jpg" />
          <h6>Papua Barat</h6>
          <h4>Raja Ampat</h4>
        </div>

        <div class="box">
          <img src="../jpg/top3.jpg" />
          <h6>Jawa Tengah</h6>
          <h4>Karimun Jawa</h4>
        </div>

        <div class="box">
          <img src="../jpg/top2.jpg" />
          <h6>Sumatera Utara</h6>
          <h4>Danau Toba</h4>
        </div>
      </div>
      <div class="center-btn">
        <a href="?destinasi" class="button">Lihat Tur</a>
      </div>
    </section>

    <section class="city">
      <div class="center-text">
        <h2>Kota</h2>
      </div>
      <div class="city-content">
        <div class="row">
          <div class="row-img">
            <img src="../jpg/jakarta1.jpg" />
          </div>
          <h4>Jakarta</h4>
        </div>

        <div class="row">
          <div class="row-img">
            <img src="../jpg/Yogyakarta1.jpg" />
          </div>
          <h4>Yogyakarta</h4>
        </div>

        <div class="row">
          <div class="row-img">
            <img src="../jpg/Semarang1.jpg" />
          </div>
          <h4>Semarang</h4>
        </div>

        <div class="row">
          <div class="row-img">
            <img src="../jpg/Makassar1.jpg" />
          </div>
          <h4>Makassar</h4>
        </div>
        <div class="row">
          <div class="row-img">
            <img src="../jpg/bandung1.jpg" />
          </div>
          <h4>Bandung</h4>
        </div>
      </div>
    </section>

    <section id="blog">
      <div class="blog-heading">
        <span>My Recent Posts</span>
        <h3>My Blog</h3>
      </div>
      <div class="blog-container">
        <div class="blog-box">
          <div class="blog-img">
            <img src="../jpg/mandalika.jpg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>24 November 2023 / Lombok</span>
            <a href="article.html" class="blog-title"
              >Jurus InJourney Genjot Destinasi Wisata Super...</a
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
        <div class="blog-box">
          <div class="blog-img">
            <img src="../jpg/wisata.jpg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>18 July 2023 / Jakarta</span>
            <a href="article.html" class="blog-title"
              >What Has Happened of All of the web Design Ideas?</a
            >
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Possimus, facilis aperiam sit officiis optio, velit in quae
              reprehenderit ipsa unde soluta dicta natus tempora, numquam fugit
              quos molestiae error provident?
            </p>
            <a href="article.html">Read More</a>
          </div>
        </div>
        <div class="blog-box">
          <div class="blog-img">
            <img src="../jpg/wisata.jpg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>18 July 2023 / Jakarta</span>
            <a href="#" class="blog-title"
              >What Has Happened of All of the web Design Ideas?</a
            >
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Possimus, facilis aperiam sit officiis optio, velit in quae
              reprehenderit ipsa unde soluta dicta natus tempora, numquam fugit
              quos molestiae error provident?
            </p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="up">
        <div class="rata">
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

    <div class="login-form-container">
      <form action="">
        <h3>Login</h3>
        <input type="email" class="box" placeholder="enter your email" />
        <input type="password" class="box" placeholder="enter your password" />
        <input type="submit" value="login now" class="btn" />
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
      </form>
    </div>

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
  </body>
</html>
