<?php require('includes/db_config.php');?>
<form action="#" method="POST">        
        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        include('./includes/vendor/autoload.php');

        if(isset($_GET['regno']))
        {
            $regno=$_GET['regno']; 
            $image=$_GET['image'];
            $sname=$_GET['sname'];
            $fname=$_GET['fname'];
            $mname=$_GET['mname'];
            $dob=$_GET['dob'];
            $category=$_GET['category'];
            $religion=$_GET['religion'];
            $program=$_GET['programtype'];
            $course=$_GET['course'];
            $mobile=$_GET['mobile'];
            $email=$_GET['email'];
            $address=$_GET['address'];
            $state=$_GET['state'];
            $distance=$_GET['distance'];
            $document=$_GET['document'];

         $mail = new PHPMailer(true);

         try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP(); 
            $mail->SMTPAuth   = true;     
            
            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP 
            $mail->Username   ='user@@gmail.com';                     //SMTP username
            $mail->Password   = 'secret';
            
            //SMTP password
            $mail->SMTPSecure ='TLS';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('user@gmail.com','Notification');
            $mail->addAddress($email);     //Add a recipient
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Hostel Application Approved'; 
            
    
            $mail->Body  = "Dear $sname,<br> 
                            Congratulation <br>
                            Your hostel application request has been accepted <br>
                            and you are eligible for pay hostel fee <br>
                            <br>
                            Thank you <br>
                            <br>
                            With Regards<br>
                            Hostel Warden<br>
                            Guru Govind Boys Hostel<br>
                            <br>
                            <br>
                            This is an auto generated mail.Please do not reply to this message or on this email address.For any 
                            query,please visit the hostel warden office.
                             
                            ";
            $mail->send();
        
        } 
        catch (Exception $e)
        {
            echo "<script>alert('Message could not be sent');</script>";

        }

            $query1="insert into studentregistration (registration_no,std_img,name,fname,mname,dob,category,religion,
            program_type,course,contact_no,email_id,address,state,distance,document) 
            values('$regno','$image','$sname','$fname','$mname','$dob','$category','$religion',
            '$program','$course','$mobile','$email','$address','$state','$distance','$document')"; 
            
            $data1=mysqli_query($con,$query1);

            $sql1="update ugregistration set hostel_status='Yes' where registration_no=$regno";
            $result1=mysqli_query($con,$sql1);
            if($result1==1)
            {
                echo"<script>alert('Application Approved');</script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/ugapplication.php" />
                    <?php 
            }
            else
            {
                echo"<script>alert('Application Not Approved');</script>";
            }    
         }   
        ?>
</form>
