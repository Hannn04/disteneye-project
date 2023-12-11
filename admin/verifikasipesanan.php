<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destineye - Order</title>
    <link rel="stylesheet" href="../css/styleadmin2.css">
    <link rel="stylesheet" href="../css/styleadmin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wNcKy5Sn9aotC0b94agSst5uo8gG5w9SI2TBA6H8tB9nFfEKtJcZxXAwrwnzk5bhR4CLYF5u9t6kFfIFs1sZZg==" crossorigin="anonymous" />

</head>
<style>
/* Add this style to your CSS file or within a style tag in your HTML file */
.modal-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1000;
}

.modal-content {
    position: relative;
    max-width: 80vw;
    max-height: 80vh;
}

img {
    max-width: 100%;
    max-height: 100%;
    display: block;
    margin: 0 auto; /* Center the image */
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: black; /* Change text color to black */
    border: 2px solid white; /* Add solid white border */
    background-color: transparent; /* Make the background transparent */
    padding: 4px 8px; /* Adjust padding for larger button */
    border-radius: 4px; /* Optional: Add border radius for rounded corners */
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Add click event listener to all elements with class 'view-image'
    document.querySelectorAll('.view-image').forEach(function(element) {
        element.addEventListener('click', function() {
            // Get the image path from data attribute
            var imagePath = this.getAttribute('data-image-path');
            
            // Create a modal container
            var modalContainer = document.createElement('div');
            modalContainer.className = 'modal-container';

            // Create a modal content
            var modalContent = document.createElement('div');
            modalContent.className = 'modal-content';

            // Create an image element
            var imageElement = document.createElement('img');
            imageElement.src =  imagePath;

            // Create a close button
            var closeButton = document.createElement('span');
            closeButton.innerHTML = '&times;';
            closeButton.className = 'close-button';

            // Append elements to the modal content
            modalContent.appendChild(closeButton);
            modalContent.appendChild(imageElement);

            // Append the modal content to the modal container
            modalContainer.appendChild(modalContent);

            // Append the modal container to the body
            document.body.appendChild(modalContainer);

            // Add click event listener to the close button to close the modal
            closeButton.addEventListener('click', function() {
                document.body.removeChild(modalContainer);
            });
        });
    });
});
</script>
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
                <div class="title h6 fw-bold">Pesanan</div>
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
                
                <th>ID Invoice</th>
                <th>Nama Pemesan</th>
                <th>Tanggal Kedatangan</th>
                <th>Jumlah Transfer</th>
                <th>Alamat Email Pelanggan</th>
                <th>No Telepon</th>
                <th>Bank</th>
                <th>Bukti Pembayaran</th>
                <th>Status Pesanan</th>
                <th class="opacity-0">list</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../controller/connect.php';

            $result = $connect->query("SELECT * FROM konfirmasipembayaran");

if (!$result) {
    // Handle the query error, e.g., print the error message
    echo "Error: " . $connect->error;
} else {
    // Fetch the data and iterate over the result set
    foreach ($result as $value):
        ?>
                <tr class="bg-white align-middle">
                    
                    <td><?php echo $value['invoice_id']; ?></td>
                    <td><?php echo $value['nama_lengkap']; ?></td>
                    <td><?php echo $value['transfer_date']; ?></td>
                    
                    <td><?php echo $value['jumlah_transfer'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['nomor_hp'] ?></td>
                    <td><?php echo $value['virtual_account_type'] ?></td>
                    <td>  <?php if (file_exists($value['bukti_pembayaran_path'])): ?>
        <i class="fa fa-eye view-image" data-image-path="<?php echo $value['bukti_pembayaran_path']; ?>"></i>
    <?php endif; ?>
                    <td>
                        <?php
                        if ($value['status'] == 0) {
                            echo "Perlu Verifikasi";
                        } elseif ($value['status'] == 1) {
                            echo "Sudah Diverifikasi";
                        } elseif ($value['status'] == 2) {
                            echo "Gagal Verifikasi";
                        } else {
                            echo "undefined";
                        }
                        ?>
                    </td>
                    <td class="d-md-flex gap-3 mt-3">
                        <?php if ($value['status'] == 0): ?>
                            <!-- Jika status 1, tampilkan ikon check dan times -->
                            <a href="../controller/proses_terima_verifikasi_pesanan.php?id_invoice=<?php echo $value['invoice_id'] ?>"><i class="far fa-check"></i></a>
                            <a href="../controller/proses_tolak_verifikasi_pesanan.php?id_invoice=<?php echo $value['invoice_id'] ?>"><i class="far fa-times"></i></a>
                            <a href="../controller/proses_hapus_verifikasi_pesanan.php?id_invoice=<?php echo $value['invoice_id'] ?>"><i class="far fa-trash"></i></a>
                        <?php elseif ($value['status'] >= 0): ?>
                            <!-- Jika status lebih dari atau sama dengan 0, tampilkan ikon pensil dan trash -->
                            
                        <?php endif; ?>
                    </td>

<?php
    endforeach;
}

// Close the database connection
$connect->close();
?>
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