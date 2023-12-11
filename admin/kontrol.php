<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destineye - User</title>
    <link rel="stylesheet" href="../css/styleadmin2.css">
    <link rel="stylesheet" href="../css/styleadmin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wNcKy5Sn9aotC0b94agSst5uo8gG5w9SI2TBA6H8tB9nFfEKtJcZxXAwrwnzk5bhR4CLYF5u9t6kFfIFs1sZZg==" crossorigin="anonymous" />

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
                    <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>logout</span><i
                                class="fal fa-sign-out-alt ms-2"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
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
          
        
            <!-- start student list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Users</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                    
                </div>
            </div>
            <div class="table-responsive">
    <table class="table student_list table-borderless">
        <thead>
            <tr class="align-middle">
               
                <th>Nama Akun</th>
                <th>Nama Email</th>
                <th>Password</th>
                <th>status</th>
                
                <th class="opacity-0">list</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../controller/connect.php';

            $result = $connect->query("SELECT * FROM user");

            foreach ($result as $value):
            ?>
                <tr class="bg-white align-middle">
                    
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['password'] ?></td>
                    
                    
                    <td>
                        <?php
                        if ($value['status'] == 0) {
                            echo "Belum Dibayar";
                        } elseif ($value['status'] == 1) {
                            echo "Pengguna";
                        } elseif ($value['status'] == 2) {
                            echo "Admin";
                        } else {
                            echo "undefined";
                        }
                        ?>
                    </td>
                    <td class="d-md-flex gap-3 mt-3">
    <?php if ($value['status'] == 1): ?>
       
    <?php elseif ($value['status'] >= 0): ?>
       
    <?php endif; ?>
</td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

            <!-- end student list table -->
        </div>
        <!-- end content page -->
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>