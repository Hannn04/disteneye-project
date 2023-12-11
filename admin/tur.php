<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <link rel="stylesheet" href="../css/tor.css" />
    <style>

    /* Navbar styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;

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
.social a:hover i {
  color: #ffffff;
  transition: all ease 0.5s;
}

.social {
  position: fixed;
  top: 50%;
  right: 0px;
  transform: translateY(-50%);
}

.social a {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  margin: 0px;
  padding: 0px;
  line-height: 0px;
  background-color: #ffffff;
  border: 1px solid #cbcbcb;
  box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
}

.social a:hover {
  background-color: #000000;
  transition: all ease 0.5s;
}

.social i {
  font-size: 20px;
  color: #2b2b2b;
}
.box:hover{
  
  transform: scale(0.9);

}

@media only screen and (max-width: 768px) {
  .navbar {
    padding: 1rem;
  }

  .navbar-logo {
    font-size: 1.5rem;
  }

  .navbar .navbar-nav {
    display: none;
    flex-direction: column;
    align-items: center;
    position: absolute;
    top: 70px;
    left: 0;
    right: 0;
    background-color: rgba(1, 1, 1, 0.8);
    text-align: center;
    z-index: 999;
  }

  .navbar .navbar-nav.active {
    display: flex;
  }

  .navbar .navbar-nav a {
    display: block;
    margin: 1rem 0;
  }

  .navbar-login {
    width: auto;
    padding: 10px;
  }

  .packages .box-container {
    margin-top: 20px;
    margin-right: 10px;
    margin-left: 10px;
  }

  .packages .box-container .box {
    flex: 100%;
    margin-bottom: 20px;
  }

  .cari {
    height: auto;
  }

  .image {
    display: block;
    margin-top: 5%;
  }

  .text,
  .search {
    margin-top: 5%;
  }

  .form {
    flex-direction: column;
  }

  .kategori,
  .destinasi {
    margin-right: 0;
    margin-bottom: 10px;
  }

  select {
    width: 100%;
  }

  .carikan {
    margin-top: 5%;
  }

  input[type="submit"] {
    width: 100%;
  }
}

</style>
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Destin<span>Eye</span></a>

      <div class="navbar-nav">
        <a href="?beranda">Beranda</a>
        <a href="?destinasi">Destinasi</a>
        <a href="blog.html">Blog & News</a>
        <a href="?booking">Cek Booking</a>
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
    <section class="cari">
      <div class="image">
        <div class="text">
          <h2>Semua Tur<i></i></h2>
        </div>
        <div class="search">
          <form>
            <div class="form" id="searchForm">
              <div class="kategori">
                <label><b>Pilih Kategori</b></label
                ><br />
                <select>
                  <option>Semua Kategori</option>
                  <option>Adventure Tourism</option>
                  <option>Convention Tourism</option>
                  <option>Cultural Tourism</option>
                  <option>Recreaction Tourism</option>
                </select>
              </div>
              <div class="destinasi">
                <label><b>Pilih Destinasi</b></label
                ><br />
                <select>
                  <option>Semua Destinasi</option>
                  <option>Jakarta</option>
                  <option>Makassar</option>
                  <option>Semarang</option>
                  <option>Makassar</option>
                  <option>Lombok</option>
                  <option>Jepara</option>
                  <option>Surabaya</option>
                  <option>Bandung</option>
                </select>
              </div>
            </div>
            <div class="carikan">
              <input type="submit" value="Search" />
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="packages">
      <div class="box-container">
        <div class="box">
          <img src="../jpg/goa1.jpg" alt="" />

          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Yogyakarta</h4>
            <a class="detail" href=""><b>Goa Pindul </b></a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 2.800.000</h5></div>
            <a href="?pemesanan1" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/explore.webp" alt="" />
          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Yogyakarta</h4>
            <a class="detail" href=""><b>Open Trip Explore Merapi</b></a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 750.000</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/curug.webp" alt="" />
          <div class="content">
            <h4>
              <i class="fas fa-map-marker-alt"></i>Jakarta
            </h4>
            <a class="detail" href=""
              ><b>Canyoneering Curug Cikondang Cianjur</b></a
            >
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 500.000</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/alam.webp" alt="" />
          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Semarang</h4>
            <a class="detail" href=""
              ><b>Wisata Alam Semarang Full Day by Paradiso Tour</b></a
            >
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 195.500</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/kuta.jpg" alt="" />
          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Lombok</h4>
            <a class="detail" href=""><b>Kuta Mandalika Full Day Tour</b></a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 212.500</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/highland.webp" alt="" />
          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Makassar</h4>
            <a class="detail" href=""><b>Makassar Highland Tour</b></a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 585.000</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/air.jpg" alt="" />
          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Bandung</h4>
            <a class="detail" href=""
              ><b>Eksplorasi Air Terjun Tumpaksewu Lumajang</b></a
            >
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 260.000</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/top3.jpg" alt="" />
          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Jepara</h4>
            <a class="detail" href=""><b>Paket Wisata Karimunjawa</b></a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 1.300.000</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
        </div>
        <div class="box">
          <img src="../jpg/bromo.webp" alt="" />
          <div class="content">
            <h4><i class="fas fa-map-marker-alt"></i>Surabaya</h4>
            <a class="detail" href=""
              ><b>Bromo Private Day Tour dengan Air Terjun Madakaripura</b></a
            >
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="price"><h5>Rp 780.000</h5></div>
            <a href="#" class="btn">Lihat Detail</a>
          </div>
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

  </body>
</html>
