<?php
session_start();
require('connect.php');

    $email = $_SESSION["email"];
    $otp = $_POST['user_otp'];

    $sql = "SELECT * FROM users WHERE user_email='$email'  and user_otp='$otp'";
    
    $res = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($res)>0)
    {
        $sql = "UPDATE  users SET user_otp=' ' WHERE user_email='$email'";
        $res = mysqli_query($con,$sql);
        
        if($res->num_rows==1)
        {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['userLogin']= true;
        $_SESSION['userId'] = $row['sr_no'];
        redirect('dashboard.php');
        }
        header('location:dashboard.php?msg= Welcome User :'.$email.'Login Success !');
    }
    else
    {
       header('location:verify.php?msg=OTP is Invalid Plz Try Again !');
    }
    
?>