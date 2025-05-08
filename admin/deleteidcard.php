<?php
include('includes/db_config.php');
if(isset($_GET['enrollno']))
{ 
    $enroll = $_GET['enrollno'];

    $query1="DELETE  FROM  idcard  WHERE enroll_no='$enroll'";
    $result1=mysqli_query($con,$query1);

    if($result1 !=1)
    {
        echo "<script>alert('Id Card  Not Deleted');</script>"; 
    }
    else
    {
        echo "<script>alert('ID Carad Deleted Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_idcard.php" />
        <?php
    }
}
        
?>