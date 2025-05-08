<?php
include('includes/db_config.php');
if(isset($_GET['id']) )
{
    $id=$_GET['id'];
    
    $query1="delete from complaint where complaint_no='$id'";
    $result1=mysqli_query($con,$query1);

    $query2="delete from complainthistory where complaint_no='$id'";
    $result2=mysqli_query($con,$query2);

    }
    if($result1 !=1  && $result2 !=1)
    {
        echo "<script>alert('Close complaint Not Deleted');</script>"; 
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/close-complaint.php" />
        <?php
    }
    
    else
    {
        echo "<script>alert('Close Complaint Successfully Removed');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/close-complaint.php" />
        <?php
    }
        
?>