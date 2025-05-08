
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Edit Warden Detials</title>
     
</head>
<body>
<?php 
require('./includes/header.php')
?>

<?php
    include('includes/db_config.php');
    error_reporting(0);
    if(isset($_GET['id']))
    {
        $id =$_GET['id'];

        $query="select * from hostel_warden where id='$id'";
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
               <a href="setting.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>

                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Update Warden Details</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form action=""  method="post" autocomplete="off" enctype="multipart/form-data">
                    

                        <div class="mb-3">
                        <label for="inputAddress">Warden  Name</label>
                        <input type="text" name="name" value="<?php echo $result['warden_name']?>" id="inputAddress" class="form-control shadow-none" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Work as a</label>
                        <select name="work" class="form-control shadow-none" >

                            <option value="">Select</option>
                            <option value="Administrative Warden (GGBH)"
                            <?php
                            if($result['work']=="Administrative Warden (GGBH)")
                            {
                            echo"selected";
                            }
                            ?>
                            >
                            Administrative Warden (GGBH)</option>

                            <option value="Chief Warden (GGBH)"
                            <?php
                            if($result['work']=="Chief Warden (GGBH)")
                            {
                            echo"selected";
                            }
                            
                            ?>
                            >
                            Chief Warden (GGBH)</option>
                            <option value="Warden (GGBH)"
                            <?php
                            if($result['work']=="Warden (GGBH)")
                            {
                            echo"selected";
                            }
                            ?>
                            >
                            Warden (GGBH)</option>
                            
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Department</label>
                        <input type="text" name="dept" value="<?php echo $result['department']?>"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Department Name" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Type</label>
                        <select name="warden_type" class="form-control shadow-none">
                            
                        <option value="">Select</option>

                            <option value="Administrative warden"
                            <?php
                            if($result['warden_type']=="Administrative warden")
                            {
                            echo"selected";
                            }
                            ?>
                            >
                            Administrative warden</option>

                            <option value="Chief warden"
                            <?php
                            if($result['warden_type']=="Chief warden")
                            {
                            echo"selected";
                            }
                            ?>
                            >
                            Chief warden</option>

                            <option value="Warden"
                            <?php
                            if($result['warden_type']=="Warden")
                            {
                            echo"selected";
                            }
                            ?>
                            >
                            Warden</option>
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Email Address</label>
                        <input type="email" name="email" value="<?php echo $result['email']?>"  class="form-control shadow-none" placeholder="Enter Email Address" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Mobile Number</label>
                        <input type="number" name="mobile" value="<?php echo $result['mobile']?>"   class="form-control shadow-none" placeholder="Enter Mobile Number" required >
                        </div>


                        <div class="mb-3">
                        <label for="inputAddress">Upload Image</label>
                        <input type="file" name="uploadfile" class="form-control shadow-none" >
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
include('db_config.php');
if(isset($_POST['submit']))
{
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../upload_img/".$filename;

  $name=$_POST['name'];
  $work=$_POST['work'];
  $department= $_POST['dept'];
  $warden_type= $_POST['warden_type'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];

  if($tempname!='')
  {
    $query="select * from hostel_warden where id='$id'";
    $data=mysqli_query($con,$query);

    $result=mysqli_fetch_assoc($data);

    $file =$result['file'];
    unlink('../upload_img/'.$file);
    move_uploaded_file($tempname,$folder);

    $sql ="UPDATE hostel_warden set image='$folder',warden_name='$name',work='$work',department='$department', warden_type='$warden_type',email='$email',mobile='$mobile' where id='$id'";

    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Record Update Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/setting.php" />
        <?php
    }
    else
    {
        echo "<script>alert('Record Not Update ');</script>";
        ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/setting.php" />
     <?php 
    }

  }
  else
  {
    if($warden_type !="" && $name !="" && $work !=""  && $email !=""  && $mobile !=""  && $department !="")
    {
 
        $sql ="UPDATE hostel_warden set warden_name='$name',work='$work',department='$department', warden_type='$warden_type',email='$email',mobile='$mobile' where id='$id'";
 
     $data = mysqli_query($con, $query); 
     if($data)
     {
       echo "<script>alert('Record Update Successfully');</script>";
       ?>
       <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/setting.php" />
       <?php
     }
     else
     {
         echo "<script>alert('Record Not Update ');</script>";
          ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/setting.php" />
       <?php
     }
   }
   else
   {
       echo "<script>alert('Please fill the form first');</script>";
   }
  }
}
?>
<?php require('./includes/footer.php')?>
