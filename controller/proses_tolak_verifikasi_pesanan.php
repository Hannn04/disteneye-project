<?php
include 'connect.php';

// Check if the ID invoice is provided in the URL
if (isset($_GET['id_invoice'])) {
    $invoice_id = $_GET['id_invoice'];

    // Update the status to 1
    $updateQuery = "UPDATE konfirmasipembayaran SET status = 2 WHERE invoice_id  = '$invoice_id'";

    if ($connect->query($updateQuery)) {
        // Redirect back to the page where the action was performed
        header("Location: ../admin/?verifikasipesanan");
        exit();
    } else {
        // Handle the update error
        
        echo "Error updating record: " . $connect->error;
    }
} else {
    // Handle the case when ID invoice is not provided
    echo "ID invoice is not provided";
}

// Close the database connection
$connect->close();
?>
