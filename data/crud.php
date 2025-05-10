<?php 
 require('db_config.php');
session_start();

 function image_upload($img)
{
  $tmp_loc = $img['tmp_name'];
  $new_name = random_int(11111,99999).$img['name'];

  $new_loc =UPLOAD_SRC.$new_name;

  if(!move_uploaded_file($tmp_loc,$new_loc))
  {
    header("location:index.php?aler=img_upload");
    exit;
  }
  else
  {
    return $new_name;
  }
 
}

if(isset($_POST['submit_pg']))
{
    foreach($_POST as $key => $value)
    {
        $_POST[$key] = mysqli_real_escape_string($con,$value);
    }
    $imgpath = image_upload($_FILES['image']);
    $docpath = image_upload($_FILES['uploadpdf']);

    $cuetno =$_POST['cuetno'];
    $sname =$_POST['sname'];
    $fname =$_POST['fname'];
    $mname =$_POST['mname'];
    $dob =$_POST['dob'];
    $gender =$_POST['gender'];
    $category =$_POST['category'];
    $religion =$_POST['religion'];
    $program =$_POST['select1'];
    $course=$_POST['select2'];
    $mobile =$_POST['phone'];
    $email =$_POST['email'];

    $address =$_POST['address'];
    $state =$_POST['state'];
    $distance =$_POST['distance'];


    if($cuetno != "" &&  $sname != "" && $fname != "" && $mname != "" && $dob != "" && $gender != "" && 
    $category != "" && $religion != "" && $program != "" && $mobile != "" && $email != ""  && 
    $address != "" && $state != "" && $distance != "")
    {
        
        $query1 = "Select * from pgregistration where cuet_no='$cuetno'";
        $data1 = mysqli_query($con, $query1);
        $total1 = mysqli_num_rows($data1);

        $query2 = "Select * from user_cred where user_email='$email'";
        $data2 = mysqli_query($con, $query2);
        $total2 = mysqli_num_rows($data2);

        if($total1 == 1 && $total2 == 1)
        {
            echo "<script>alert('Cuet no. and email id already registered');</script>";
        }
        else
        {
            $query="INSERT INTO pgregistration (cuet_no,std_img,sname,father_name,mother_name,date_of_birth,
            gender,category,religion,program_type,course,phone_no,email_id,address,state,distance,aadhar_pdf,apply_date)
                
            VALUES('$cuetno','$imgpath','$sname','$fname','$mname','$dob','$gender','$category',
            '$religion','$program','$course ','$mobile','$email','$address','$state','$distance','$docpath',NOW())";
            
            $result=mysqli_query($con,$query);
    
            if($result)
            {
                $_SESSION['cuetnumber'] = $cuetno;
                $_SESSION['program'] = $program;

                echo "<script>alert('Hostel Registration Successfull');</script>";

            ?>
                <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/report-generate/downloadapplication.php?success=added" />
                <?php
            }
            else
            {
                echo "<script>alert('Data Not Inserted');</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Please fill the form first');</script>";
    }
}

 if(isset($_POST['submit_ug']))
 {
    // print_r($_POST);
    // print_r(  $_FILES['image']);

    foreach($_POST as $key => $value)
    {
        $_POST[$key] = mysqli_real_escape_string($con,$value);

    }
    $imgpath = image_upload($_FILES['image']);
    $docpath = image_upload($_FILES['uploadpdf']);

    $cuetno =$_POST['cuetno'];
    $sname =$_POST['sname'];
    $fname =$_POST['fname'];
    $mname =$_POST['mname'];
    $dob = date('Y-m-d',strtotime($_POST['dob']));
    $gender =$_POST['gender'];
    $category =$_POST['category'];
    $religion =$_POST['religion'];
    $course =$_POST['course'];
    $mobile =$_POST['phone'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $state =$_POST['state'];
    $distance =$_POST['distance'];

    if($cuetno != "" &&  $sname != "" && $fname != "" && $mname != "" && $dob != "" && $gender != "" && 
    $category != "" && $religion != "" && $course != "" && $mobile != "" && $email != ""  && 
    $address != "" && $state != "" && $distance != "")
    {
        
        $query1 = "Select * from ugregistration where cuet_no='$cuetno'";
        $data1 = mysqli_query($con, $query1);
        $total1 = mysqli_num_rows($data1);

        $query2 = "Select * from user_cred where user_email='$email'";
        $data2 = mysqli_query($con, $query2);
        $total2 = mysqli_num_rows($data2);

        if($total1 == 1 && $total2 == 1)
        {
            echo "<script>alert('Cuet no. and email id already registered');</script>";
        }
        else
        {
            $query="INSERT INTO ugregistration (cuet_no,std_img,sname,father_name,mother_name,date_of_birth,
            gender,category,religion,course,phone_no,email_id,address,state,distance,aadhar_pdf,apply_date)
                
            VALUES('$cuetno','$imgpath','$sname','$fname','$mname','$dob','$gender','$category',
            '$religion','$course','$mobile','$email','$address','$state','$distance','$docpath',NOW())";
            
            $result=mysqli_query($con,$query);
    
            if($result)
            {
                $_SESSION['cuetnumber'] = $cuetno;
            

                echo "<script>alert('Hostel Registration Successfull');</script>";

            ?>
                <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/report-generate/downloadapplication.php?success=added" />
                <?php
            }
            else
            {
                echo "<script>alert('Data Not Inserted');</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Please fill the form first');</script>";
    }

    
 }
?>