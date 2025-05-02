<?php
session_start();
require('includes/db_config.php');
require('email.php');

    $username = $_POST["user_name"];

    $pass = $_POST["user_pass"];

    $sql = "SELECT * FROM user_cred WHERE user_email='$username' OR user_name='$username' AND user_pass='$pass'";
    
    $res = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($res)>0)
    {  
        while($fetch=mysqli_fetch_assoc($res))
        {
               $email = $fetch['user_email'];
        
                $_SESSION['email']=$email;
                
                $otp = rand(11111,99999);

                send_otp($email,"HOSTEL OTP LOGIN",$otp);

                $sql = "UPDATE  user_cred SET user_otp='$otp' WHERE user_email='$email'";
                $res = mysqli_query($con,$sql);

                $_SESSION['status']="Plz Check Your Email for OTP and Verify";
                header('location:verify.php');
                exit(0);
        }
    }
    else
    {
      $_SESSION['status']="Email id is Invalid... Please Check Again !";
       header('location:index.php');
       exit(0);
    }



?>