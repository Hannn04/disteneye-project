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
    <link rel="stylesheet" href="../css/pemesanan1.css" />
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
    <section>
      <div class="pemesanan">
        <div class="pemesanan-tiket">
          <div class="slideshow-container">
            <div class="mySlides fade">
              <img src="../jpg/goa1.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
              <img src="../jpg/goa.webp" style="width: 100%" />
            </div>

            <div class="mySlides fade">
              <img src="../jpg/goa8.jpg" style="width: 100%" />
            </div>
            <div class="tombol" style="text-align: center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
          </div>
          <br />

          <div class="pesan">
            <form>
              <h2>Goa Pindul</h2>
              <br />
              <div class="icon-pesan">
                <p>
                  <i class="fa fa-tag" aria-hidden="true"></i>Recreaction
                  tourism
                </p>
                <p><i class="fas fa-map-marker-alt"></i>Yogyakarta, Sleman</p>
              </div>
              <p class="prace"><b>Rp 2.800.000</b></p>
              <div class="pilih">
                
              <input type="date" name="tgl_awal" id="tgl_awal" placeholder="Tanggal Perjalanan" />
              <input type="date" name="tgl_akhir" id="tgl_akhir" placeholder="Tanggal Perjalanan" />  

                
              </div>
              <button onclick="openForm()" type="button" id="pesan" class="pemesanan-ticket">
                <i class="fa fa-check" aria-hidden="true"></i>Pesan Sekarang
              </button>
            </form>
            <div class="share">
              <p>#Bagikan informasi ini kepada teman anda</p>
              <div class="icon-share">
                <a class="facebook" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a>
                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="instagram" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a class="linkedin" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="post-filter container">
          <span class="filter-item active-filter" data-filter="itinerary"
            >Itinerary</span
          >
          <span class="filter-item" data-filter="design">Detail</span>
          <span class="filter-item" data-filter="lainnya">Tour Lainnya</span>
        </div>
      </div>
      <div class="text-Itinerary itinerary">
        <h3><b>Day 1: Arrival in Yogyakarta.</b></h3>
        <br />
        <ul>
          <li>Arrive in Yogyakarta, the nearest major city to Goa Pindul.</li>
          <li>Check into your accommodation and rest</li>
        </ul>

        <h3>Day 2: Morning Exploration.</h3>
        <br />
        <ul>
          <li>Start your day early and have a hearty breakfast.</li>
          <li>Travel to Goa Pindul (approximately 2 hours from Yogyakarta).</li>
          <li>
            Arrive at Goa Pindul and register for the cave tubing experience.
          </li>
          <li>
            Participate in the cave tubing adventure, exploring the underground
            river inside the cave
          </li>
        </ul>
        <h3>Day 2: Afternoon Activities.</h3>
        <br />
        <ul>
          <li>
            After the cave tubing experience, have lunch at a local eatery.
          </li>
          <li>
            Visit nearby attractions like the Gunung Kidul Hills or Goa Jomblang
            (another cave system known for its unique light phenomenon).
          </li>
          <li>Return to Yogyakarta in the evening.</li>
        </ul>
        <h3>Day 3: Yogyakarta City Tour</h3>
        <br />
        <ul>
          <li>
            Spend the day exploring Yogyakarta's cultural and historical sites.
          </li>
          <li>
            Visit the Kraton (Yogyakarta Palace), Taman Sari Water Castle, and
            Malioboro Street for shopping.
          </li>
          <li>
            Explore local art markets and try traditional Javanese cuisine for
            dinner.
          </li>
        </ul>
        <h3>Day 4: Cultural Immersion</h3>
        <br />
        <ul>
          <li>
            Visit the Borobudur Temple, a UNESCO World Heritage site, known for
            its stunning architecture and rich history.
          </li>
          <li>Explore the nearby Pawon and Mendut temples.</li>
          <li>
            Experience a traditional Indonesian dance performance in the
            evening.
          </li>
        </ul>
        <h3>Day 5: Departure</h3>
        <br />
        <ul>
          <li>
            Depending on your departure time, you may have some free time in the
            morning for last-minute shopping or sightseeing.
          </li>
          <li>Explore the nearby Pawon and Mendut temples.</li>
          <li>
            Check out from your accommodation and head to the airport for your
            departure.
          </li>
        </ul>
      </div>
      <div class="text-Itinerary design">
        <h3><b>Tour Details</b></h3>
        <br />
        <p>
          Di Cave Tubing Goa Pindul, Anda bisa merasakan sensasi berpetualang di
          sungai di dalam gua dengan menggunakan baju pelampung. Sambil
          menyusuri lembah gelap di dalam gua dengan stalaktit dan stalagmit,
          Anda juga akan mendapatkan cerita tentang perjalanan Joko Singlulung
          mencari ayahnya. Cave tubing merupakan perpaduan antara rafting dan
          caving dengan menggunakan rubber tube. Anda menikmati perjalanan
          dengan berbaring di dalam satu set tabung dan mengikuti arus sungai
          bawah tanah. Cave tubing sangat cocok bagi mereka yang menyukai
          perjalanan petualangan. Sebelum mencapai base camp, Anda bisa melihat
          sebuah desa indah yang berbeda dari desa lain di Gunung Kidul.
          Sebenarnya, Anda bisa melihat banyak pohon dalam perjalanan menuju ke
          sana. Seperti yang Anda lihat, itu adalah pohon jati. Ini seperti
          hutan kecil di sekitar perjalanan Anda. Perjalanan ini membuat momen
          tak terlupakan.
        </p>
        <div class="tabel">
          <span><b>"</b></span>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Perferendis aliquam asperiores sint vel.
          </p>
        </div>
      </div>
      <div class="text-Itinerary lainnya">
        <h3><b>Mungkin Anda tertarik...</b></h3>
        <br />
        <div class="kotak">
          <div class="box">
            <img src="../jpg/curug.webp" alt="" />
            <div class="content">
              <h4>
                <i class="fas fa-map-marker-alt"></i>Kramat Jati, East Jakarta
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
        </div>
      </div>
    </section>
    <div class="checkout" id="popupForm" style="display:none;">
    <div class="checkout-dalam">
        <button id="back" onclick="closeForm()" class="back">X</button>
        <h2>Checkout</h2>
        <div class="check-text"></div>

        <div class="checkout-pemesanan">
            <div class="checkout-left">
                <form method="POST" action="../controller/proses_pemesanan.php">
                    <div class="atas-checkout">
                        <h3>Detail Pemesananan</h3>
                        <div class="checkout-detail">
                            <div class="atas">
                                <div class="pilih-title">
                                    <label for="title_pelanggan">Title</label><br />
                                    <select class="select" name="title_pelanggan" id="title_pelanggan">
                                        <option value="Tuan">Tuan</option>
                                        <option value="Nyonya">Nyonya</option>
                                    </select>
                                </div>
                                <div class="namadepan">
                                    <label for="nama_depan_pelanggan">Nama Depan</label><br />
                                    <input class="nama" type="text" placeholder="Masukkan nama depan" name="nama_depan_pelanggan" id="nama_depan_pelanggan">
                                </div>
                                <div class="namabelakang">
                                    <label for="nama_belakang_pelanggan">Nama Belakang</label><br />
                                    <input class="nama" type="text" placeholder="Masukkan nama belakang" name="nama_belakang_pelanggan" id="nama_belakang_pelanggan">
                                </div>
                            </div>

                            <div class="bawah">
                                <div class="namadepan">
                                    <label for="no_telepon_pelanggan">No Telepon/Hp</label><br />
                                    <input class="nama" type="text" placeholder="Masukkan no.telepon/hp" name="no_telepon_pelanggan" id="no_telepon_pelanggan">
                                </div>
                                <div class="namabelakang">
                                    <label for="alamat_email_pelanggan">Alamat Email</label><br />
                                    <input class="nama" type="email" placeholder="Masukkan alamat email" name="alamat_email_pelanggan" id="alamat_email_pelanggan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tamu">
                        <h3>Detail Tamu</h3>
                        <h4>Tamu 1</h4>
                        <div class="checkout-detail">
                            <div class="atas">
                                <div class="pilih-title">
                                    <label for="title_tamu">Title</label><br />
                                    <select class="select" name="title_tamu" id="title_tamu">
                                        <option value="Tuan">Tuan</option>
                                        <option value="Nyonya">Nyonya</option>
                                    </select>
                                </div>
                                <div class="namadepan">
                                    <label for="nama_depan_tamu">Nama Depan</label><br />
                                    <input class="nama" type="text" placeholder="Masukkan nama depan" name="nama_depan_tamu" id="nama_depan_tamu">
                                </div>
                                <div class="namabelakang">
                                    <label for="nama_belakang_tamu">Nama Belakang</label><br />
                                    <input class="nama" type="text" placeholder="Masukkan nama belakang" name="nama_belakang_tamu" id="nama_belakang_tamu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="prosespemesanan" class="prosespemesanan" type="submit">Proses Pemesanan</button>
               

            </div>
          
          <div class="checkout-right">
    <h3>Detail Tour</h3>
    <div class="table">
        <img src="../jpg/goa.webp" alt="" />
        <p class="pindul"><b>Goa Pindul</b></p>
        <input type="text" name="destinasi" value ="Goa Pindul" hidden readonly />
        <p class="location">
            <i class="fas fa-map-marker-alt"></i>Sleman, Yogyakarta
        </p>
        <!-- <p class="location" id="checkout-durasi">
    <i class="fa fa-clock" aria-hidden="true"></i> -->
</p>
        <br />
        <table>
        <tr>
        <td><b>Jadwal Kedatangan</b></td>
<td>
    <input type="text" name="tgl_awal" id="checkout-tgl-berangkat" readonly />
</td>
</tr>
<tr>
    <td><b>Jadwal Berakhir</b></td>
    <td>
        <input type="text" name="tgl_akhir" id="checkout-tgl-selesai" readonly />
    </td>
</tr>
<tr>
    <td><b>Harga</b></td>
    <td>
        <input type="text" name="harga" id="checkout-harga"  readonly />
    </td>
</tr>
</table>
        <br />
        <div class="total">
            <strong>Total <font>Rp 2.800.000</font></strong>
        </div>

</form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    $id = $_SESSION['id'];
    $query = mysqli_query($connect, "SELECT * FROM pesanan WHERE id_pemesan = $id");
    
    ?>
    <div class="checkout" id="popupInvoice" style="display:none">
    <div class="checkout-dalam">
        <button id="back" onclick="closeForm()" class="back">X</button>
        <h2>Checkout</h2>
        <div class="check-text"></div>

        <div class="checkout-pemesanan">
            <div class="checkout-left">
                    <div class="atas-checkout">
                        <h3>Detail Pemesananan</h3>
                        <div class="checkout-detail">
                            <div class="atas">
                                <p> Silahkan Copy Kode Invoice ini, dan cek bookingan anda.</p>
                            </div>  
                            <div class="bawah">
                               <p>Invoice ID : </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
      </div>
    </div>


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
    
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>

    <script>
  function openForm() {
    document.getElementById("popupForm").style.display = "";
    populateCheckoutDetails();
  }

  function closeForm() {
    document.getElementById("popupForm").style.display = "none";
  }

  function populateCheckoutDetails() {
    let tglAwalInput = document.querySelector('input[name="tgl_awal"]');
    let tglAkhirInput = document.querySelector('input[name="tgl_akhir"]');
    let hargaInput = document.querySelector('input[name="harga"]');

    if (tglAwalInput && tglAkhirInput && hargaInput) {
        let tglAwal = new Date(tglAwalInput.value);
        let tglAkhir = new Date(tglAkhirInput.value);

        // Format tanggal menjadi "dd MMMM yyyy"
        let formattedTglAwal = formatDate(tglAwal);
        let formattedTglAkhir = formatDate(tglAkhir);
        let harga = "2800000"; // Menggunakan variabel yang berbeda untuk harga

        // Hitung perbedaan tanggal dalam hari
        let dateDifference = Math.ceil((tglAkhir - tglAwal) / (1000 * 60 * 60 * 24));

        document.getElementById("checkout-tgl-berangkat").value = formattedTglAwal;
        document.getElementById("checkout-tgl-selesai").value = formattedTglAkhir;
        document.getElementById("checkout-harga").value = harga;
        document.getElementById("checkout-durasi").textContent = `Durasi: ${dateDifference} hari`;

        // Tambahkan logika lainnya sesuai kebutuhan
    }
}

// Fungsi untuk memformat tanggal menjadi "dd MMMM yyyy"
function formatDate(date) {
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    return date.toLocaleDateString('id-ID', options);
}
function openInvoice() {
    document.getElementById("popupInvoice").style.display = "";
    // Pada bagian ini, Anda bisa menambahkan logika khusus untuk mengisi detail invoice jika diperlukan.
    // Misalnya, mengambil data invoice dari server atau menghitung total harga, dsb.
    // Anda dapat menyesuaikan sesuai kebutuhan.
}

</script>
    <script src="../js/script.js"></script>
  </body>
</html>