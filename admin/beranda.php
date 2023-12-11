<?php
  
    // hitung jumlah yang mendaftar
    $querypesanan = mysqli_query($connect, "SELECT * FROM pesanan");
    $datapesanan = mysqli_fetch_assoc($querypesanan);
   
    // hitung jumlah yang mendaftar
    $querypesanan = mysqli_query($connect, "SELECT * FROM pesanan");
    $datapesanan = mysqli_fetch_assoc($querypesanan);
  
    $queryhitung = mysqli_query($connect, "SELECT COUNT(*) as total FROM user");
    $datahitung = mysqli_fetch_assoc($queryhitung);
    $totalUser = $datahitung['total'];

    $queryhitung2 = mysqli_query($connect, "SELECT COUNT(*) as total2 FROM pesanan WHERE status=1");
    $datahitung2 = mysqli_fetch_assoc($queryhitung2);
    $totalPaid = $datahitung2['total2'];

    $queryhitung3 = mysqli_query($connect, "SELECT COUNT(*) as total3 FROM pesanan");
    $datahitung3 = mysqli_fetch_assoc($queryhitung3);
    $totalOrder = $datahitung3['total3'];

    $queryhitung4 = mysqli_query($connect, "SELECT COUNT(*) as total4 FROM pesanan WHERE status=2");
    $datahitung4 = mysqli_fetch_assoc($queryhitung4);
    $totalCheckedOrder = $datahitung4['total4'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destineye - Dashboard</title>
    <link rel="stylesheet" href="../css/styleadmin2.css">
    <link rel="stylesheet" href="../css/styleadmin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->

        <div class="bg-sidebar vh-100 w-50 position-fixed">
            <div class="log d-flex justify-content-between">
                <h1 class="E-classe text-start ms-3 ps-1 mt-3 h6 fw-bold">Destineye</h1>
                <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
            </div>
            <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
            <img class="rounded-circle" src="../css/img/blankprofile.webp" alt="img-admin" height="120" width="120">
                <h2 class="h6 fw-bold"><?php echo $_SESSION['nama']; ?></h2>
                <span class="h7 admin-color">admin</span>
            </div>
            <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
                <ul class="d-flex flex-column list-unstyled">
                    <li class="h7"><a class="nav-link text-dark" href="../admin/?beranda"><i
                        class="fal fa-home-lg-alt me-2"></i> <span>Beranda</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="?pesanan"><i
                        class="fal fa-bookmark me-2"></i> <span>Pesanan</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="?kontrol"><i
                        class="far fa-bookmark me-2"></i> <span>Kontrol</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="?verifikasipesanan"><i
                        class="far fa-bookmark me-2"></i> <span>Verifikasi Pesanan</span></a></li>
                    
                </ul>
                <ul class="logout d-flex justify-content-start list-unstyled">
                    <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Logout</span><i
                                class="fal fa-sign-out-alt ms-2"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px">
        <nav class="navbar container-fluid navbar-light bg-white position-sticky top-0">
                <div class=""><i class="fal fa-caret-circle-down h5 d-none d-md-block menutoggle fa-rotate-90"></i>
                    <i class="fas fa-bars h4  d-md-none"></i></div>
                <div class="d-flex align-items-center gap-4">
                    <form class="d-flex align-items-center">
                        <input class="form-control me-2" type="search" placeholder="search" aria-label="search">
                        <i class="fal fa-search position-relative"></i>
                    </form>
                    <i class="fal fa-bell"></i>
                </div>
            </nav>
            <div class="cards row gap-3 justify-content-center mt-5">
                <div class=" card__items card__items--blue col-md-3 position-relative">
                    <div class="card__students d-flex flex-column gap-2 mt-3">
                        
                        <span>Order Success</span>
                    </div>
                    <div class="card__nbr-students">
                    <span class="h5 fw-bold nbr"><?php echo $totalCheckedOrder; ?></span>
                    </div>
                </div>

                <div class=" card__items card__items--rose col-md-3 position-relative">
                    <div class="card__Course d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-bookmark h3"></i>
                        <span>Order</span>
                    </div>
                    <div class="card__nbr-course">
                    <span class="h5 fw-bold nbr"><?php echo $totalOrder; ?></span>
                    </div>
                </div>

                <div class=" card__items card__items--yellow col-md-3 position-relative">
                    <div class="card__payments d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-usd-square h3"></i>
                        <span>Already Paid</span>
                    </div>
                    <div class="card__payments">
                        <span class="h5 fw-bold nbr"><?php echo $totalPaid; ?></span>
                    </div>
                </div>

                <div class="card__items card__items--gradient col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Users</span>
                    </div>
                    <span class="h5 fw-bold nbr"><?php echo $totalUser; ?></span>
                </div>
            </div>

        </div>
        <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>