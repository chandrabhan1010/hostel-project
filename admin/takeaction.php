
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Take Action</title>
     
</head>
<body>
<?php require('./includes/header.php')?>

<?php
include('db_config.php');
if(isset($_GET['id']))
{
  $complaint_no=$_GET['id'];
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Take Action</h3>
                <hr>
                <section class="container my-2 bg-light w-50 text-light text-decoration-none  p-2 border shadow rounded">
                    <form class="row g-3" action="#" method="post" autocomplete="off"> 
                        <div class="col-12">
                            <label for="inputState" class="form-label "></label>
                            <select id="inputState" class="form-select text-decoration-none shadow-none " name="status" required>
                            <option selected>Select Status</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Closed">Closed</option>
                            </select>
                        </div>

                        <div class="col-12">
                        <label for="inputState" class="form-label">Explain The Complaint</label>
                        <textarea class="form-control text-decoration-none shadow-none " name="remark" rows="3" placeholder="Remark or Message" required="required"></textarea>
                        </div>

                        <div class="col-12 mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark" name="submit">SUBMIT</button>
                        </div>
                    </form>
                </section>

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
  $status=$_POST['status'];
  $remark=$_POST['remark'];

  if($status !="" && $remark !="" )
  {
      $sql="insert into complainthistory (complaint_no,complaint_status,complaint_remark) values('$complaint_no','$status','$remark')";
  
      $data=mysqli_query($con,$sql);

      $query="UPDATE complaint set complaint_status='$status' where complaint_no='$complaint_no'";
      $data1=mysqli_query($con,$query);

      if($data && $data1)
      {
        echo "<script>alert('Complaint Update ');</script>";
        ?>
         <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/progress-complaint.php" />
         <?php
      }
      else
      {
        echo "<script>alert('Complaint Not Update');</script>";
      }
  }
    else
    {
      echo "<script>alert('Please fill the form first');</script>";
    }
  }
?>

<?php require('./includes/footer.php')?>
