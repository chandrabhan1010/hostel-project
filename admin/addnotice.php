
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Post New Notice</title>
     
</head>
<body>
<?php require('./includes/header.php')?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
               <a href="notice_board.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Post New Notice</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form action=""  method="post" autocomplete="off" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                        <label for="inputAddress">Notice Title</label>
                        <input type="text" name="title"  id="inputAddress" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Notice Description</label>
                        <textarea class="form-control" name="description" rows="3" required="required"></textarea>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Link Title</label>
                        <input type="text" name="linkname" class="form-control"  required="required">
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Upload File</label>
                        <input type="file" name="uploadfile" class="form-control"  required="required">
                        </div>


                        <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" name="post" >POST</button>
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
if(isset($_POST['post']))
{
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../document/".$filename;
  move_uploaded_file($tempname,$folder);
    
    $title=$_POST['title'];
    $des=$_POST['description'];
    $linktitle= $_POST['linkname'];


    if($folder!="" && $title !="" && $des !="" && $linktitle !="")
   {
    $query = "INSERT INTO notice (title,description,link_title,file) 
    values('$title','$des','$linktitle','$folder')";

    $data = mysqli_query($con, $query); 
    if($data)
    {
      echo "<script>alert('Notice Post Successfully');</script>";
      ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/notice_board.php" />
      <?php
    }
    else
    {
        echo "<script>alert('Notice Not Post ');</script>";
         ?>
       <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/notice_board.php" />
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
