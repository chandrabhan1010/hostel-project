   
<?php
include('includes/db_config.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];

        $query1="delete from hostel_warden where id='$id'";

        $result1=mysqli_query($con,$query1); 
        if(!$result1)
        {
            echo "<script>alert('Recorde Deleted Successfully');</script>"; 
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/setting.php" />
            <?php
        }
        else
        {
            echo "<script>alert('Record Not Deleted');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/setting.php" />
            <?php
        }   
}
?>
</div>
