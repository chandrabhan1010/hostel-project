<?php require('includes/db_config.php');?>
<form action="#" method="POST">        
        <?php
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
