<?php
include 'connect.php';

// Check if the ID invoice is provided in the URL
if (isset($_GET['id_invoice'])) {
    $invoice_id = $_GET['id_invoice'];

    // Update the status to 1 in konfirmasipembayaran table
    $updateQueryKonfirmasi = "UPDATE konfirmasipembayaran SET status = 1 WHERE invoice_id = '$invoice_id'";

    if ($connect->query($updateQueryKonfirmasi)) {
        // Update the status to 2 in pesanan table
        $updateQueryPesanan = "UPDATE pesanan SET status = 2 WHERE id_invoice = '$invoice_id'";
        $resultUpdatePesanan = mysqli_query($connect, $updateQueryPesanan);

        if ($resultUpdatePesanan) {
            // Redirect back to the page where the action was performed
            header("Location: ../admin/?verifikasipesanan");
            exit();
        } else {
            // Handle the update error for pesanan table
            echo "Error updating pesanan record: " . $connect->error;
        }
    } else {
        // Handle the update error for konfirmasipembayaran table
        echo "Error updating konfirmasipembayaran record: " . $connect->error;
    }
} else {
    // Handle the case when ID invoice is not provided
    echo "ID invoice is not provided";
}

// Close the database connection
$connect->close();
?>
