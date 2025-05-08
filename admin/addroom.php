<?php
include('includes/db_config.php');
if(isset($_POST['addroom']))
{
  $roomno=$_POST['room_no'];
  $floor=$_POST['floor'];
  $seater=$_POST['seater'];

  if($roomno !="" && $floor !="" && $seater !="")
  {
    $query1 = "Select * from rooms where room_no='$roomno'";
    $data1 = mysqli_query($con, $query1); 
    $total1 = mysqli_num_rows($data1);
    if($total1==1)
    {
      echo "<script>alert('Room No. already exists');</script>";
      ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_room.php" />
      <?php
    }
    else
    {
      $query="Insert into rooms (room_no,floor,seater,allot_seat,empty_seat) values
      ($roomno,$floor,$seater,0,$seater )";
      $result=mysqli_query($con,$query);
      if($result==1)
      {
        echo "<script>alert('Add Room Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_room.php" />
        <?php
      }
      else
      {
        echo "<script>alert('The room has not been added');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_room.php" />
        <?php
      }

    }
  }
  else
  {
      echo "<script>alert('Please fill the form first');</script>";
      ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_room.php" />
      <?php
  }
  
}
?>