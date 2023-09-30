<?php
include 'connection.php';
if (isset($_POST['delete'])) {
 $ID = $_GET['p_id'];

mysqli_query($conn,"DELETE FROM `patient_invoices` WHERE $ID");

header('location:invoice.php');
}
?>