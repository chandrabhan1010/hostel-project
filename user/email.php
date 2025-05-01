<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function send_otp($to,$subject,$content)
{
    $mail = new PHPMailer(true);

    try 
    {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'shivamthakur13092003@gmail.com';                     //SMTP username
        $mail->Password   = 'kkui okna zuoj tlpz';                               //SMTP password
        $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('shivamthakur13092003@gmail.com','Notification');
        $mail->addAddress($to,'verify'); 
    
        //Attachments
        //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body  = "<font color='green' size='5'> Your OTP For Login :".$content." <br>
        This OTP is Valid for Only One Time.</font>";
    
        $mail->send();

        echo "OTP Has Been Send";
    } 
    catch (Exception $e) 
    {
        echo "OTP could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
