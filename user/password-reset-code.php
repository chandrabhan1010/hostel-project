<?php
session_start();
require('includes/db_config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function  send_password_reset($get_name,$get_email,$token)
{
    $mail = new PHPMailer(true);

    try 
    {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'shivamthakur13092003@gmail.com';                     //SMTP username
        $mail->Password   = 'kkui okna zuoj tlpz';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('shivamthakur13092003@gmail.com',$get_name);
        $mail->addAddress($get_email,'verify'); 
    
        //Attachments
        //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password Notification';
        $mail->Body  = "<h2>Hello</h2>
                         <h3>You are receiving this email because we received a password reset request for your account.</h3>
                         <br><br>
                         <a href='http://localhost:8080/HostelProject/user/password-change.php?token=$token&email=$get_email'> Click Here</a>";
    
        $mail->send();
        echo "Passwork reset link has been sent your register email id !";
    } 
    catch (Exception $e) 
    {
        echo "Link could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


if(isset($_POST['password_reset_link']))
{
    $email = mysqli_real_escape_string($con,$_POST['user_email']);
    $token = md5(rand());

    $check_email = "SELECT * FROM user_cred WHERE user_email='$email' LIMIT 1";
    $check_email_run  = mysqli_query($con,$check_email);

    if(mysqli_num_rows($check_email_run))
    {
      $row = mysqli_fetch_array($check_email_run);
      $get_name = $row['sname'];
      $get_email = $row['user_email'];

      $update_token ="UPDATE user_cred SET verify_token='$token' WHERE user_email='$email'LIMIT 1";
      $update_token_run = mysqli_query($con,$update_token);

      if($update_token_run)
      {
        send_password_reset($get_name,$get_email,$token);

        $_SESSION['status']="We e-mailed you a password reset link";
        header("location:forget_pass.php");
        exit(0);
      }
      else
      {
        $_SESSION['status']="Something went wrong. #1";
        header("location:forget_pass.php");
        exit(0);
      }
    }
    else
    {
        $_SESSION['status']="No Email Found";
        header("location:forget_pass.php");
        exit(0);
    }
  }
// change password code
  if(isset($_POST['password_update']))
  {
    $email = mysqli_real_escape_string($con,$_POST['user_email']);
    $new_pass = mysqli_real_escape_string($con,$_POST['new_pass']);
    $confirm_pass = mysqli_real_escape_string($con,$_POST['confirm_pass']);
   $token = mysqli_real_escape_string($con,$_POST['password_token']);

    if(!empty($token))
    {
      if(!empty($email) && !empty($new_pass) && !empty($confirm_pass))
      {
       //checking token valid or not
       $check_token = "SELECT verify_token FROM user_cred WHERE verify_token='$token' LIMIT 1";
       $check_token_run = mysqli_query($con,$check_token);

       if(mysqli_num_rows($check_token_run)>0)
       {
         if($new_pass==$confirm_pass)
         {
          $update_pass = "UPDATE user_cred SET user_pass='$new_pass' WHERE verify_token='$token'LIMIT 1";
          $update_pass_run = mysqli_query($con,$update_pass);
          if($update_pass_run)
          {
            $update_token = "UPDATE user_cred SET verify_token='' WHERE user_email='$email'LIMIT 1";
            mysqli_query($con,$update_token);

            $_SESSION['status']="New Password Successfully Updated";
            header("location:index.php?token=$token&email=$email");
            exit(0); 
          }
          else
          {
            $_SESSION['status']="Did not update password something went wrong !";
            header("location: password-change.php?token=$token&email=$email");
            exit(0); 
          }
         }
         else
         {
          $_SESSION['status']="New Password and Confirm Password Does Not Match";
          header("location: password-change.php?token=$token&email=$email");
          exit(0); 
         }
       }
       else
       {
        $_SESSION['status']="Invalid Token";
        header("location: password-change.php?token=$token&email=$email");
        exit(0); 
       }
      }
      else
      {
        $_SESSION['status']="All field are Mandetory";
        header("location: password-change.php?token=$token&email=$email");
        exit(0); 
      }
    }
    else
    {
      $_SESSION['status']="No Token Available";
      header("location:password-change.php");
      exit(0);
    }
  }
?>