<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>


<?php

include 'connection.php';
$ID = $_GET['id'];
$Record = mysqli_query($conn,"SELECT * FROM  staff_operating WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>
    

<center>
     <div class="main">
        <form action="update_StaffPro.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="id"  value="<?php echo $data['id'] ?>">
        <label for="">Staff Name:</label>
        <input type="text" value="<?php echo $data['staff_name'] ?>" name="sname"><br>
        <label for="">Operating Room Number:</label>
        <input type="text" value="<?php echo $data['room_number'] ?>" name="roomno"><br>
        <label for="">Schedule Date:</label>
        <input type="text" value="<?php echo $data['schedule_date'] ?>" name="schedule"><br>
            
            
        <input type="hidden" name="id" value="<?php echo $data[id]?>">
        <button type="submit" name="update">Update</button>

        </form>
    </div>
        </center>

</body>
</html>


