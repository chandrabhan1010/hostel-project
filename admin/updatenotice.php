
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

<?php
    include('includes/db_config.php');
    error_reporting(0);
    if(isset($_GET['id']))
    {
        $id =$_GET['id'];

        $query="select * from notice where notice_id='$id'";
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
               <a href="notice_board.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Post New Notice</h3>
                <hr>
                <div class="card-body mt-5 rounded border text-decoration-none shadow bg-light ">
                    <form action=""  method="post" autocomplete="off" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                        <label for="inputAddress">Notice Title</label>
                        <input type="text" name="title" value="<?php echo $result['title']?>"  id="inputAddress" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Notice Description</label>
                        <textarea class="form-control" name="description" rows="3" required="required">  <?php echo $result['description']?></textarea>
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Link Title</label>
                        <input type="text" name="linkname" class="form-control" value="<?php echo $result['link_title']?>"  required="required">
                        </div>

                        <div class="mb-3">
                        <label for="inputAddress">Upload File</label>
                        <input type="file" name="uploadfile" class="form-control" accept=".pdf" <?php echo $result['file']?> >
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
include('db_config.php');
if(isset($_POST['post']))
{
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../document/".$filename;

  $title=$_POST['title'];
  $des=$_POST['description'];
  $linktitle= $_POST['linkname'];

  if($tempname!='')
  {
    $query="select * from notice where notice_id='$id'";
    $data=mysqli_query($con,$query);

    $result=mysqli_fetch_assoc($data);

    $file =$result['file'];
    unlink('../document/'.$file);
    move_uploaded_file($tempname,$folder);

    $sql ="UPDATE notice set file='$folder',title='$title',description='$des',link_title='$linktitle' where notice_id='$id'";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Notice Update Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/notice_board.php" />
        <?php
    }
    else
    {
        echo "<script>alert('Notice Not Update ');</script>";
        ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/notice_board.php" />
     <?php 
    }

  }
  else
  {
    if($title !="" && $des !="" && $linktitle !="")
    {
 
     $query = "UPDATE notice set title='$title',description='$des', link_title='$linktitle' where notice_id='$id'";
     echo $query;
 
     $data = mysqli_query($con, $query); 
     if($data)
     {
       echo "<script>alert('Notice Update Successfully');</script>";
       ?>
       <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/admin/notice_board.php" />
       <?php
     }
     else
     {
         echo "<script>alert('Notice Not Update ');</script>";
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
}
?>

<?php require('./includes/footer.php')?>
