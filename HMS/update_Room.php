<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="testroom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    input{
        margin: 10px;
    }
</style>
</head>
<body>

<?php

include 'connection.php';
$ID = $_GET['ID'];
$Record = mysqli_query($conn,"SELECT * FROM room_availability WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>
    

<center>
     <div class="main">
        <form action="update_RoomPro.php" method="POST" enctype="multipart/form-data" >
        <label for="">Room Number:</label>
        <input type="text" value="<?php echo $data['room_number'] ?>" name="Roomno"><br>
        <label for="">Occupancy Status:</label>
        <input type="text" value="<?php echo $data['occupancy_status'] ?>" name="ocs" id="">
        <br><br>
            
            
        <input type="hidden" name="Id">
        <button type="submit" name="update" class='btn btn-danger m-2'>Edit</button>

        </form>
    </div>
        </center>

</body>
</html>


