<?php
require('includes/db_config.php');
require('includes/essentials.php');
session_start();

if((isset($_SESSION['userLogin'])&& $_SESSION['userLogin']==true))
{
   redirect('dashboard.php');
}


    $email = $_SESSION["email"];
    $otp = $_POST['user_otp'];

    $sql = "SELECT * FROM user_cred WHERE user_email='$email' and user_otp='$otp' LIMIT 1";
    
    $res1 = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($res1)>0)
    {
        $sql = "UPDATE  user_cred SET user_otp='' WHERE user_email='$email' LIMIT 1";
        mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($res1);
        $_SESSION['userLogin']= true;
        $_SESSION['userId'] = $row['sr_no'];
        redirect('dashboard.php');

        // header('location:dashboard.php?msg= Welcome User :'.$email.'Login Success !');
    }
    else
    {
        $_SESSION['status']="OTP is Invalid Plz Try Again !";
       header('location:verify.php');
       exit(0);
    }
    
?>