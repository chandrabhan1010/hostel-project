<?php
session_start();
require('connect.php');
require('email.php');

    $email = $_POST["user_email"];

    $sql = "SELECT * FROM users WHERE user_email='$email'";
    
    $res = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($res)>0)
    {
        $_SESSION['email']=$email;
        
        $otp = rand(11111,99999);
        send_otp($email,"PHP OTP LOGIN",$otp);

        $sql = "UPDATE  users SET user_otp='$otp' WHERE user_email='$email'";
        $res = mysqli_query($con,$sql);
        header('location:verify.php?msg= Plz Check Your Email for OTP and Verify');
    }
    else
    {
       header('location:index.php?msg=Email id is Invalid... Please Check Agaim !');
    }



?>