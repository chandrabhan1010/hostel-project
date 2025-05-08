
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
<?php
    include('includes/db_config.php');
    if(isset($_GET['enrollno']))
    {
        $enroll = $_GET['enrollno'];

        $query = "Select * from idcard where enroll_no ='$enroll'";
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
        $result = mysqli_fetch_assoc($data);
    }
   ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
               <a href="manage_idcard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Update Student Id Card Details</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                        <label for="inputAddress">Enrollment No.</label>
                        <input type="number" name="enrollno"  id="inputAddress" value="<?php echo $result['enroll_no']?>" class="form-control shadow-none" placeholder="Enter Enrollment Number" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Student Name</label>
                        <input type="text" name="sname" value="<?php echo $result['name']?>"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Student Name" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Father Name</label>
                        <input type="text" name="fname" value="<?php echo $result['father_name']?>" id="inputAddress" class="form-control shadow-none" placeholder="Enter Father Name" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Room Number</label>
                        <input type="number" name="roomno" value="<?php echo $result['room_no']?>" id="inputAddress" class="form-control shadow-none" placeholder="Enter Room Number" required >
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Course</label>
                        <input type="text" name="course" value="<?php echo $result['course']?>"  id="inputAddress" class="form-control shadow-none" placeholder="Enter Course Name" required >
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" name="submit" >UPDATE</button>
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

    $enroll=$_POST['enrollno'];
    $name=$_POST['sname'];
    $fname=$_POST['fname'];
    $roomno=$_POST['roomno'];
    $course=$_POST['course'];

  if($enroll !="" && $name !="" && $fname !="" && $roomno !="" && $course !="")
  {
    $query1 = "Select * from idcard where enroll_no='$enroll'";
    $query="UPDATE idcard SET name='$name',father_name='$fname',room_no='$roomno',course='$course' where enroll_no='$enroll'";

      $result=mysqli_query($con,$query);
      
      if($result==1)
      {
        echo "<script>alert('Id Card Update Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/manage_idcard.php" />
        <?php
      }
      else
      {
        echo "<script>alert('Id Card Not Updated');</script>";
      }

    }
  }

  

?>

<?php require('./includes/footer.php')?>
