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
  elseif(isset($_GET['login-admin'])) {
     include "login-admin.php";
} else {
  // Jika tidak ada parameter yang sesuai, maka muat halaman "Beranda" sebagai halaman default.
  include "login.php";
}

?>