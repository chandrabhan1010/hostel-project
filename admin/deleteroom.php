    
<?php
include('includes/db_config.php');
if(isset($_GET['room_no']))
{
    $roomno=$_GET['room_no'];

        $query1="delete from rooms where room_no='$roomno'";

        $result1=mysqli_query($con,$query1); 
        if(!$result1)
        {
            echo "<script>alert('ROOM NOT REMOVE');</script>"; 
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_room.php" />
            <?php
        }
        else
        {
            echo "<script>alert('Room Delete Successfully');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_room.php" />
            <?php
        }   
}
?>
</div>


<?php include('./adminfooter.php');?>