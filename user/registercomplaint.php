    
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Register Complaint</title>
     
</head>
<body>
<?php require('./includes/header.php')?>

<?php
include('includes/db_config.php');
error_reporting(0);
if(isset($_GET['id']))
{
    $email =$_GET['id'];

    $query="select * from studentregistration where email_id='$email'";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
               <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Register New Complaint</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form action=""  method="post" autocomplete="off" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                        <label for="inputAddress">Complaint Type </label>
                        <select  class="form-control" required="required" name="ctype">
                            <option value="">Select Complaint Type</option>
                            <option value="Food Related">Food Related</option>
                            <option value="Room Related">Room Related</option>
                            <option value="Fee Related">Fee Related</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Plumbing">Plumbing</option>
                            <option value="Discipline">Discipline</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Complaint Description</label>
                        <textarea class="form-control" name="cdetails" rows="3" required="required"></textarea>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">File (if any)</label>
                        <input type="file" name="uploadfile" class="form-control"  required="required">
                        </div>


                        <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark" name="submit" >REGISTER</button>
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
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../complaint_img/".$filename;
  move_uploaded_file($tempname,$folder);
    
    $ctype=$_POST['ctype'];
    echo $cdetails=$_POST['cdetails'];
    $userid= $result['registration_no'];
    $name= $result['name'];
    $mob =$result['contact_no'];
    $roomno= $result['room_no'];
    $cnumber=mt_rand(100000000,999999999);

    if($folder!="" && $ctype !="" && $cdetails !="" && $userid !="" && $name !="" && $mob !="" && $roomno !="")
   {
    echo $query = "INSERT INTO complaint (complaint_no,userid,name,mobile,roomno,complaint_type,complaint_details,complaint_doc) 
    values($cnumber,'$userid','$name','$mob','$roomno','$ctype','$cdetails','$folder')";

    
  
    $data = mysqli_query($con, $query); 
    if($data)
    {
      echo "<script>alert('Complaint Register Successfully');</script>";
       ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/user/dashboard.php" /> 
       <?php
    }
    else
    {
        echo "<script>alert('Complaint Not Register');</script>";
         ?>
       <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/user/dashboard.php" />
      <?php
        }
      }
      else
      {
          echo "<script>alert('Please fill the form first');</script>";
      }
  
}
?>



<?php require('./includes/footer.php')?>
