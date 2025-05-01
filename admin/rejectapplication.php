<?php
require('includes/db_config.php');
if(isset($_GET['id']) && isset($_GET['program']))
{
    $email=$_GET['id'];
    $program_type=$_GET['program'];

    if($program_type=='UG')
    {
        $query1="delete from ugregistration where email_id='$email'";
        $result1=mysqli_query($con,$query1);
    
        $query2="delete from user_cred where email='$email'";
        $result2=mysqli_query($con,$query2);
    
        if($result1 !=1 && $result2 !=1)
        {
            echo "<script>alert('Application Not Rejected');</script>"; 
        }
        else
        {
            echo "<script>alert('Application Reject Successfully');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/ugapplication.php" />
            <?php
    
        }
    }
    else
    {
        $query1="delete from pgregistration where email_id='$email'";
        $result1=mysqli_query($con,$query1);
    
        $query2="delete from user_cred where user_email='$email'";
        $result2=mysqli_query($con,$query2);
    
        if($result1 !=1 && $result2 !=1)
        {
            echo "<script>alert('Application Not Rejected');</script>"; 
        }
        else
        {
            echo "<script>alert('Application Reject Successfully');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/pgapplication.php" />
            <?php
    
        }
    }
       
}
?>
</div>
