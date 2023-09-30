<?php
session_start();
require 'connection.php';

if (isset($_GET['id'])) {
    $PID = mysqli_real_escape_string($conn, $_GET['Id']);
   // echo $PID;
} else {
    //echo "no data";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Patient Invoice</title>
    <link rel="stylesheet" type="text/css" href="invoice.css">
</head>

<body>
    <h1>Patient Invoice</h1>
    <form method="post" action="invoiceins.php">
            
        <input type="hidden" name="pid" value="<?=$PID;?>">
        <input type="hidden" name="id">
        <label for="dos">Date of service:</label>
        <input type="text" name="dos">
        <label for="serpro">Services Provided:</label>
        <textarea name="serpro"></textarea>
        <label for="amount">Bill Amount:</label>
        <input type="text" name="amount">
        <label for="payst">Payment status:</label>
        <select name="payst">
            <option value="paid">Paid</option>
            <option value="female">Pending</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>

    <table>
        <thead>
            <tr>
                <th scope="col">Patient ID</th>
                <th scope="col">Invoice ID</th>
                <th scope="col">Date of Services</th>
                <th scope="col">Services Provided</th>
                <th scope="col">Bill Amount</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $pic = mysqli_query($conn, "SELECT * FROM patient_invoices");
            while ($row = mysqli_fetch_array($pic)) {
                echo "
            <tr>
                <td>$row[pid]</td>
              <td>$row[inv_id]</td>
              <td>$row[dateOfS]</td>
              <td>$row[S_Provided]</td>
              <td>$row[bill_amount]</td>
              <td>$row[payment_s]</td>
              
              <td><button><a href='invoiceup.php? Id= $row[pid]'>Update</a></button></td>
              <td><button><a href='invoicedel.php? Id= $row[pid]'>Delete</a></button></td>
              
            </tr> ";
            }
            ?>

        </tbody>
    </table>
</body>

</html>