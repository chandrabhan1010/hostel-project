
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Update Login Credential</title>
     
</head>
<body>
<?php require('./includes/header.php')?>
<?php
    include('includes/db_config.php');
    if(isset($_GET['id']))
    {
        $email = $_GET['id'];
        
        $query = "Select * from user_cred where user_email ='$email'";
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

               <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                
               <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Update Login Credential</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                        <label for="inputAddress">Email Address.</label>
                        <input type="email" name="user_email"  id="inputAddress" value="<?php echo $result['user_email']?>" class="form-control shadow-none" readonly="true" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Username</label>
                        <input type="text" name="user_name" value="<?php echo $result['user_name']?>"  id="inputAddress" class="form-control shadow-none" placeholder="Enter New Username" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Password</label>
                        <input type="text" name="user_pass" value="<?php echo $result['user_pass']?>"  id="inputAddress" class="form-control shadow-none" placeholder="Enter New Password" required>
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
include('includes/db_config.php');
if(isset($_POST['submit']))
{

    $email=$_POST['user_email'];
    $username=$_POST['user_name'];
    $pass=$_POST['user_pass'];


  if($email !="" && $username !="" && $pass !="")
  {

    $query="UPDATE user_cred SET user_name='$username',user_pass='$pass' where user_email ='$email'";

    $result = mysqli_query($con,$query);

      
      if($result==1)
      {
        echo "<script>alert('Id Card Update Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/user/dashboard.php" />
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
