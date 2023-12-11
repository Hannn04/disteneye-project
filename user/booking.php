
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cek Booking</title>
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
    <link rel="stylesheet" href="../css/cek.css" />
    <link rel="shortcut icon" href="../jpg/logo destineye.png" type="image/x-icon">
    <style>
      
  table {
    width: 80%; /* Sesuaikan dengan lebar yang Anda inginkan */
    margin: 0 auto; /* Meletakkan tabel di tengah */
    border-collapse: collapse;
    border-spacing: 0;
    margin-top: 20px; /* Jarak dari bagian atas */
  }

  th, td {
    border: 1px solid #ddd; /* Warna border dan ketebalan yang diinginkan */
    padding: 8px; /* Sesuaikan dengan padding yang diinginkan */
    text-align: left;
  }

  th {
    background-color: #f2f2f2; /* Warna latar belakang header */
  }


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
        <h1>
          Cek Booking
        </h1>
        <p>Gunakan form dibawah ini untuk melihat detail booking Anda.</p>
      </div>
    </section>
    <section class="cek">
        <div class="tulisan"><p>Pastikan <b>ID invoice</b> & <b>alamat email</b> yang Anda masukkan benar, silahkan diulangi</p></div>
        <div class="search">
          <form action="">
            <input type="text" name="id_invoice" placeholder="ID invoice">
            <input type="email" name="alamat_email_pelanggan" placeholder="Alamat Email">
            <button>Cari</button>
        </form>
      <br><p>Histori Pesanan Anda</p>

      </div>
        
    </section>
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Invoice</th>
            <th>Destinasi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Isi tabel akan diisi melalui PHP -->
        <?php
$id = $_SESSION['id'];
$querypesanan = mysqli_query($connect, "SELECT * FROM pesanan WHERE id_pemesan=$id");

// Tampilkan data dalam tabel HTML
$no = 1;
while ($row = mysqli_fetch_assoc($querypesanan)) {
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['id_invoice'] . "</td>";
    echo "<td>" . $row['destinasi'] . "</td>";
    echo "</tr>";
    $no++;
}

// Tutup koneksi (if needed, but it's not necessary here)
// $connect->close();
?>

    </tbody>
</table>
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
    <script src="script.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
    // Menangkap formulir saat dikirim
    var searchForm = document.querySelector('.search form');

    if (searchForm) {
        searchForm.addEventListener('submit', function (event) {
            // Mengambil nilai dari input ID invoice dan alamat email
            var idInvoice = document.querySelector('input[name="id_invoice"]').value;
            var alamatEmail = document.querySelector('input[name="alamat_email_pelanggan"]').value;

            // Ajax request untuk memeriksa apakah data cocok di server
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Mengonversi respons JSON ke objek JavaScript
                    var response = JSON.parse(xhr.responseText);

                    if (response.status === 'success') {
                        // Jika data cocok, arahkan pengguna
                        window.location.href = '../user/?transaksi&id_invoice=' + idInvoice + '&alamat_email_pelanggan=' + alamatEmail;
                    } else {
                        // Jika data tidak cocok, tampilkan alert
                        alert('Tidak ada data yang cocok dengan ID invoice dan alamat email yang dimasukkan.');
                    }
                }
            };

            // Membuat request POST untuk memeriksa data di server
            xhr.open('POST', '../controller/check_data.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('id_invoice=' + idInvoice + '&alamat_email_pelanggan=' + alamatEmail);

            // Mencegah formulir dikirim secara default
            event.preventDefault();
        });
    }
});

</script>
  </body>
</html>
