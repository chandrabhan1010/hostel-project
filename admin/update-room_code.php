<?php
include('includes/db_config.php');

if(isset($_POST['update']))
{

 $room_no=$_POST['roomno'];
 $seater=$_POST['seater'];
 $allot=$_POST['allot'];
 $empty=$_POST['empty'];
 $status=$_POST['status'];

    $query="UPDATE  rooms set seater='$seater',allot_seat='$allot',empty_seat='$empty',allot_status='$status' where room_no=' $room_no'";
    
       $result=mysqli_query($con,$query);
        if($result==1)
        { 
          echo "<script>alert('Room Details Update Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_room.php" />
     
      <?php
        }
        else
        {
        echo "<script>alert('Room Details Not Updated');</script>";
        }

        }
 ?>