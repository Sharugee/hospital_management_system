<?php

include 'connection.php';

$ID = $_GET['Id'];
$Record = mysqli_query($conn,"SELECT * FROM  patient_information WHERE p_id = $ID");
$data = mysqli_fetch_array($Record);

?>
    

<center>
        <div class="main">
        <form action="updatepro.php" method="POST" enctype="multipart/form-data" >
        <label for="">Patient_name:</label>
        <input type="text" value="<?php echo $data['p_name'] ?>" name="pname"><br>
        <label for="">Age:</label>
        <input type="text" value="<?php echo $data['age'] ?>" name="age"><br>
        <label for="">Gender:</label>
        <input type="text" value="<?php echo $data['gender'] ?>" name="gender"><br>
        <label for="">Address:</label>
        <input type="text" value="<?php echo $data['address'] ?>" name="address"><br>

            <input type="hidden" name="Id"  value="<?php echo $data['p_id'] ?>">
        <button type="submit" name="update">Update</button>

        </form>
    </div>
        </center> 
