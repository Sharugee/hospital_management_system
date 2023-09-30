<?php
// include db connection
include 'connection.php';


if(isset($_POST['submit'])){
    $pid = $_POST['pid'];
    $dos = $_POST['dos'];
    $serpro = $_POST['serpro'];
	$amount = $_POST['amount'];
    $payst = $_POST['payst'];
 	

    // insert data

    $insert="INSERT INTO `patient_invoices`(`pid`,`dateOfS`, `S_Provided`, `bill_amount`, `payment_s`) VALUES ('$pid','$dos','$serpro','$amount','$payst');";
    mysqli_query($conn,$insert);
    //echo "success";
    header('location:invoice.php');

}

?>
