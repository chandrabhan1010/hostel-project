
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Add Warden</title>
     
</head>
<body>
<?php require('./includes/header.php')?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
               <a href="setting.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>

                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Add New Warden Details</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form action=""  method="post" autocomplete="off" enctype="multipart/form-data">
                    

                        <div class="mb-3">
                        <label for="inputAddress">Warden  Name</label>
                        <input type="text" name="name"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Work as a</label>
                        <select name="work" class="form-control shadow-none">
                            <option value="">Select</option>
                            <option value="Administrative Warden (GGBH)">Administrative Warden (GGBH)</option>
                            <option value="Chief Warden (GGBH)">Chief Warden (GGBH)</option>
                            <option value="Warden (GGBH)">Warden (GGBH)</option>
                    
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Department</label>
                        <input type="text" name="dept"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Department Name" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Type</label>
                        <select name="type" class="form-control shadow-none">
                            <option value="">Select</option>
                            <option value="Administrative warden">Administrative Warden</option>
                            <option value="Chief warden">Chief Warden</option>
                            <option value="Warden">Warden</option>
           
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Email Address</label>
                        <input type="email" name="email"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Email Address" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Mobile Number</label>
                        <input type="number" name="mobile"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Mobile Number" required >
                        </div>


                        <div class="mb-3">
                        <label for="inputAddress">Upload Image</label>
                        <input type="file" name="uploadfile1"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Room Number" required >
                        </div>



                        <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" name="submit" >ADD</button>
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

    $name=$_POST['name'];
    $work=$_POST['work'];
    $department=$_POST['dept'];
    $type=$_POST['type'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

  if($folder1 !="" && $name !="" && $work !="" && $department !="" && $type !="" && $email !=""  && $email !="")
  {

      $query="Insert into hostel_warden (warden_name,work,department,warden_type,email,mobile,image) values
      ('$name','$work','$department','$type','$email','$mobile','$folder1')";
    
      $result=mysqli_query($con,$query);
      
      if($result)
      {
       echo "<script>alert('Record Added ');</script>";
        ?>
     <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/setting.php" /> 
        <?php

      }
      else
      {
        echo "<script>alert('Record Not Added');</script>";
      }

    }
  }

  
?>

<?php require('./includes/footer.php')?>
