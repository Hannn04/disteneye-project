<?php

    session_start();
    include "../controller/connect.php";
    
?>

<?php

if (isset($_GET['beranda'])) {
  include "beranda.php";
}
 elseif(isset($_GET['registrasi'])) {
    include "register.php";
 }
 elseif(isset($_GET['pemesanan1'])) {
  include "pemesanan1.php";
}
elseif(isset($_GET['pemesanan2'])) {
  include "pemesanan2.php";
}
elseif(isset($_GET['pemesanan3'])) {
  include "pemesanan3.php";
}
elseif(isset($_GET['pemesanan4'])) {
  include "pemesanan4.php";
}
elseif(isset($_GET['pemesanan5'])) {
  include "pemesanan5.php";
}
elseif(isset($_GET['pemesanan6'])) {
  include "pemesanan6.php";
}
elseif(isset($_GET['pemesanan7'])) {
  include "pemesanan7.php";
}
elseif(isset($_GET['pemesanan8'])) {
  include "pemesanan8.php";
}
elseif(isset($_GET['pemesanan9'])) {
  include "pemesanan9.php";
}
elseif(isset($_GET['transaksi'])) {
  include "transaksi.php";
}


elseif(isset($_GET['proses_pembayaran'])) {
  include "../controller/proses_pembayaran.php";
}
elseif(isset($_GET['konfirmasi'])) {
  include "konfirmasi.php";
}
elseif(isset($_GET['booking'])) {
 include "booking.php";
}
 elseif(isset($_GET['destinasi'])) {
  include "tur.php";
} else {
  // Jika tidak ada parameter yang sesuai, maka muat halaman "Beranda" sebagai halaman default.
  include "beranda.php";
}

?>