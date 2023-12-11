<?php

    session_start();
    include "../controller/connect.php";
    
?>

<?php

if (isset($_GET['beranda'])) {
  include "beranda.php";
}
 elseif(isset($_GET['pesanan'])) {
    include "pesanan.php";
  }
  elseif(isset($_GET['verifikasipesanan'])) {
     include "verifikasipesanan.php";
 }
 elseif(isset($_GET['pemesanan1'])) {
  include "pemesanan1.php";
}
elseif(isset($_GET['kontrol'])) {
 include "kontrol.php";
}
elseif(isset($_GET['transaksi'])) {
  include "transaksi.php";
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