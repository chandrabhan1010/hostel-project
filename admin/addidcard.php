
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Generate Id Card</title>
     
</head>
<body>
<?php require('./includes/header.php')?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
               <a href="manage_idcard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Generate New Hostel Id Card</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form action=""  method="post" autocomplete="off" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                        <label for="inputAddress">Enrollment No.</label>
                        <input type="number" name="enrollno"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Enrollment Number" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Student Name</label>
                        <input type="text" name="sname"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Student Name" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Father Name</label>
                        <input type="text" name="fname"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Father Name" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Room Number</label>
                        <input type="number" name="roomno"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Room Number" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Course</label>
                        <input type="text" name="course"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Course Name" required >
                        </div>


                        <div class="mb-3">
                        <label for="inputAddress">Upload Student Image</label>
                        <input type="file" name="uploadfile1"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Room Number" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Upload Warden Sign</label>
                        <input type="file" name="uploadfile2"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Room Number" required >
                        </div>


                        <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" name="submit" >GENERATE</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>

<?php
include('includes/db_config.php');
if(isset($_POST['submit']))
{
    $filename=$_FILES["uploadfile1"]["name"];
    $tempname=$_FILES["uploadfile1"]["tmp_name"];
    $folder1="../upload_img/".$filename;
    move_uploaded_file($tempname,$folder1);

    $filename=$_FILES["uploadfile2"]["name"];
    $tempname=$_FILES["uploadfile2"]["tmp_name"];
    $folder2="../upload_document_pdf/".$filename;
    move_uploaded_file($tempname,$folder2);

    $enroll=$_POST['enrollno'];
    $name=$_POST['sname'];
    $fname=$_POST['fname'];
    $roomno=$_POST['roomno'];
    $course=$_POST['course'];

  if($folder1 !="" && $folder2 !="" && $enroll !="" && $name !="" && $fname !="" && $roomno !="" && $course !="")
  {
    $query1 = "Select * from idcard where enroll_no='$enroll'";
    $data1 = mysqli_query($con, $query1); 
    $total1 = mysqli_num_rows($data1);
    if($total1==1)
    {
      echo "<script>alert('This enrollment number has already been issued an Id Card');</script>";

    }
    else
    {
      $query="Insert into idcard (enroll_no,name,father_name,room_no,course,std_img,warden_sign) values
      ('$enroll','$name','$fname','$roomno','$course','$folder1','$folder2')";
    
      $result=mysqli_query($con,$query);
     

      $sql="UPDATE studentregistration SET enrollment='$enroll' where name='$name'";
      echo $sql;
      $res = mysqli_query($con,$sql);
      
      if($result==1 && $res==1)
      {
       echo "<script>alert('Generate Id Card Successfully');</script>";
        ?>
     <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_idcard.php" /> 
        <?php




      }
      else
      {
        echo "<script>alert('Id Card Not Generate');</script>";
      }

    }
  }
  else
  {
    echo "<script>alert('Please fill the form first');</script>";

    //   $_SESSION['status']="Please fill the form first";
    //   header("location:addidcard.php");
    //   exit(0);

      
  }
  
}
?>

<?php require('./includes/footer.php')?>
