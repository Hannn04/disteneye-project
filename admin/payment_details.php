<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
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
                <h1 class="e-classe text-start ms-3 ps-1 mt-3 h6 fw-bold">e-classe</h1>
                <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
            </div>
            <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
                <img class="rounded-circle" src="../assets/img/img-admin.jpeg" alt="img-admin" height="120" width="120">
                <h2 class="h6 fw-bold"><?php echo $_session['name']; ?></h2>
                <span class="h7 admin-color">admin</span>
            </div>
            <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
                <ul class="d-flex flex-column list-unstyled">
                        <li class="h7"><a class="nav-link text-dark" href="?beranda"><i
                            class="fal fa-home-lg-alt me-2"></i> <span>home</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="course.php"><i
                                class="fal fa-bookmark me-2"></i> <span>course</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="students_list.php"><i
                                class="far fa-graduation-cap me-2"></i> <span>students</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="payment_details.php"><i
                                class="fal fa-usd-square me-2"></i> <span>payment</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href=""><i
                                class="fal fa-file-chart-line me-2"></i> <span>report</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href=""><i
                                class="fal fa-sliders-v-square me-2"></i> <span>settings</span></a></li>
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

            <!-- start studient list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Payment Details</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                </div>
            </div>
            <div class="table table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr class="py-3">
                            <th>Name</th>
                            <th>Payment Schedule</th>
                            <th>Bill Number</th>
                            <th>Amount Paid</th>
                            <th>Balance amount</th>
                            <th>Date </th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        include 'conixion.php';
                        $requete = "SELECT * FROM payments_list";
                        $result = $con -> query($requete);

                        foreach($result as $value):
                            ?>
                            <tr>
                                <td> <?php echo $value['Name'] ?></td>
                                <td> <?php echo $value['PaymentSchedule'] ?></td>
                                <td> <?php echo $value['BillNumber'] ?></td>
                                <td> <?php echo $value['AmountPaid'] ?></td>
                                <td> <?php echo $value['BalanceAmount'] ?></td>
                                <td> <?php echo $value['Date'] ?></td>
                                <td><i class="fal fa-eye"></i></td>
                            </tr>
                       <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
            
            <!-- end student list table -->

        </div>
        <!-- end content page -->
    </main>
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>