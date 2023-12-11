<?php
include "koneksi.php";
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
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Destin<span>Eye</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#destinasi">Destinasi</a>
        <a href="?booking">Kontak</a>
      </div>
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
        <a href="#" class="button">Pesan Perjalanan</a>
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
          <img src="top1.jpg" />
          <h6>Papua Barat</h6>
          <h4>Raja Ampat</h4>
        </div>

        <div class="box">
          <img src="top3.jpg" />
          <h6>Jawa Tengah</h6>
          <h4>Karimun Jawa</h4>
        </div>

        <div class="box">
          <img src="top2.jpg" />
          <h6>Sumatera Utara</h6>
          <h4>Danau Toba</h4>
        </div>
      </div>
      <div class="center-btn">
        <a
          href="file:///C:/Users/muham/OneDrive/Documents/expo/tur.html#home"
          class="button"
          >Lihat Tur</a
        >
      </div>
    </section>

    <section class="city">
      <div class="center-text">
        <h2>Kota</h2>
      </div>
      <div class="city-content">
        <div class="row">
          <div class="row-img">
            <img src="jakarta1.jpg" />
          </div>
          <h4>Jakarta</h4>
        </div>

        <div class="row">
          <div class="row-img">
            <img src="Yogyakarta1.jpg" />
          </div>
          <h4>Yogyakarta</h4>
        </div>

        <div class="row">
          <div class="row-img">
            <img src="Semarang1.jpg" />
          </div>
          <h4>Semarang</h4>
        </div>

        <div class="row">
          <div class="row-img">
            <img src="Makassar1.jpg" />
          </div>
          <h4>Makassar</h4>
        </div>
        <div class="row">
          <div class="row-img">
            <img src="bandung1.jpg" />
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
            <img src="wisata.jpg" alt="Blog" />
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
            <a
              href="file:///C:/Users/muham/OneDrive/Documents/expo/article.html"
              >Read More</a
            >
          </div>
        </div>
        <div class="blog-box">
          <div class="blog-img">
            <img src="wisata.jpg" alt="Blog" />
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
        <div class="blog-box">
          <div class="blog-img">
            <img src="wisata.jpg" alt="Blog" />
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

    <section id="contact" class="contact">
      <div class="konten">
        <h2>Tentang Kami</h2>
        <p>
          Kami di DestinEye hadir untuk menghidupkan impian perjalanan Anda.
          Dengan hati yang penuh semangat dan tekad untuk menghadirkan
          pengalaman wisata yang tak terlupakan, kami mengajak Anda untuk
          menjelajahi keindahan Indonesia.
        </p>
      </div>
      <div class="container">
        <div class="contactInfo">
          <div class="kotak">
            <div class="icon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Alamat</h3>
              <p>
                Jalan Kaliurang Km. 13,5.<br />Kec.Ngemplak,<br />Kabupaten
                Sleman, Daerah Istimewa Yogyakrta
              </p>
            </div>
          </div>
          <div class="kotak">
            <div class="icon">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>477-786-754866</p>
            </div>
          </div>
          <div class="kotak">
            <div class="icon">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>Farhan@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="contactForm">
          <form>
            <h2>Mengirim Pesan</h2>
            <div class="inputbox">
              <input type="text" name="" required="required" />
              <span>Nama Lengkap</span>
            </div>
            <div class="inputbox">
              <input type="text" name="" required="required" />
              <span>Email</span>
            </div>
            <div class="inputbox">
              <textarea required="required"></textarea>
              <span>Ketik pesan anda</span>
            </div>
            <div class="inputbox">
              <input type="submit" name="" value="Kirim" />
            </div>
          </form>
        </div>
      </div>
    </section>

    <i class="fas fa-time" id="form-close"></i>

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
  </body>
</html>

<?php
mysqli_close($conn);
?>

