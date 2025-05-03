<?php
include('includes/db_config.php');
if(isset($_GET['id']) )
{
    $id=$_GET['id'];
    
    $query1="delete from notice where notice_id='$id'";
    $result1=mysqli_query($con,$query1);

    }
    if($result1 !=1 )
    {
        echo "<script>alert('Notice Not Deleted');</script>"; 
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/notice_board.php" />
        <?php
    }
    
    else
    {
        echo "<script>alert('Notice Deleted Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/notice_board.php" />
        <?php
    }
        
?>