<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Update Room</title>
    <style>
        @media (max-width: 768px) 
        {
            .home-content h3
            {
            font-size: 10px;
            text-align: center;
            }
            .home-content hr{
                width: 100%;
                
            }
            .table td h3
            {
            font-size: 20px;
            }
            .table tr td 
            {
            font-size: 10px;
            }
            .table th 
            {
            font-size: 10px;
            }
            .table td h4
            {
            font-size: 20px;
            }
        }
        @media (max-width: 576px) 
            {
            td[data-label="Operations"] {
            display: flex !important;
            flex-direction: row;
            justify-content: center;
            gap: 0.5rem;
            flex-wrap: wrap; /* Optional: change to nowrap if you want strict single-line */
            text-align: center;
            padding: 0.5rem !important;
            min-width: 340px !important;
        }

        td[data-label="Operations"] a 
        {
            flex: 1 1 auto;
            min-width: 80px !important;
            font-size: 0.85rem;
            padding: 0.25rem 0.5rem !important;
        }
       }
       @media (max-width: 1440px) 
        {
       td[data-label="Operations"] {
        display: flex !important;
        flex-direction: row;
        justify-content: center;
        gap: 0.5rem;
        flex-wrap: wrap; /* Optional: change to nowrap if you want strict single-line */
        text-align: center;
        padding: 0.5rem !important;
        min-width: 340px !important;
        }

        td[data-label="Operations"] a 
        {
            flex: 1 1 auto;
            min-width: 80px !important;
            font-size: 0.85rem;
            padding: 0.25rem 0.5rem !important;
        }
        }
        
    </style>
     
</head>
<body>
<?php require('./includes/header.php')?>

<?php
include('includes/db_config.php');
$roomno=$_GET['room_no'];
error_reporting(0);//avoid warnning

$query="select * from rooms where room_no='$roomno'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11 col-12  p-0 ms-3 ">
                <!-- Design Form -->    
    <div class="home-content align-items-center ">
    <a href="manage_room.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
    <h3 class="mt-5">Update Room Details</h3>
    <hr>

    <div class="card-body border text-decoration-none shadow-none bg-light">
        <form action="update-room_code.php"  method="post" autocomplete="off">
            <div class="mb-3">
            <label for="inputAddress">Room Number</label>
            <input type="number" name="roomno"  id="inputAddress" class="form-control shadow-none" value="<?php echo $result['room_no'];?>"required readonly="true">
            </div>

            <div class="mb-3">
            <label >Floor</label>
            <select class="form-select shadow-none"  name="floor"  required="required" disabled>
            <option value="">Choose Floor</option>
      <option value="1"
      <?php
      if($result['floor']=='1')
      {
      echo "selected";
      }
      ?>
      >
      1</option>

      <option value="2"
      <?php
      if($result['floor']=='2')
      {
        echo"selected";
      }
      
      ?>
      >
      2</option>
      <option value="3"
      <?php
      if($result['floor']=='3')
      {
      echo"selected";
      }
      ?>
      >
      3</option>

      <option value="4"
      <?php
      if($result['floor']=='4')
      {
      echo"selected";
      }
      ?>
      >
      4</option>

      <option value="5"
      <?php
      if($result['floor']=='5')
      {
      echo"selected";
      }
      
      ?>
      >
      5</option>

    </select>
            </select>

            </div>

            <div class="mb-3">
            <label>Seater</label>
            <select class="form-select shadow-none" name="seater" required>
            <option value="">Select Seater</option>
      <option value="1"
      <?php
      if($result['seater']=="1")
      {
      echo"selected";
      }
      ?>
      >
      1</option>

      <option value="2"
      <?php
      if($result['seater']=="2")
      {
      echo"selected";
      }
      
      ?>
      >
      2</option>
      <option value="3"
      <?php
      if($result['seater']=="3")
      {
      echo"selected";
      }
      ?>
      >
      3</option>

      <option value="4"
      <?php
      if($result['seater']=="4")
      {
      echo"selected";
      }
      ?>
      >
      4</option>

      <option value="5"
      <?php
      if($result['seater']=="5")
      {
      echo"selected";
      }
      ?>
      >
      5</option>
            </select>
            </div>

            <div class="mb-3">
            <label>Allot Seat</label>
            <select class="form-select shadow-none" name="allot" required>
            <option value="">Select</option>
      <option value="0"
      <?php
      if($result['allot_seat']=='0')
      {
      echo"selected";
      }
      ?>
      >
      0</option>
      <option value="1"
      <?php
      if($result['allot_seat']=='1')
      {
      echo"selected";
      }
      ?>
      >
      1</option>

      <option value="2"
      <?php
      if($result['allot_seat']=='2')
      {
      echo"selected";
      }
      
      ?>
      >
      2</option>
      <option value="3"
      <?php
      if($result['allot_seat']=='3')
      {
      echo"selected";
      }
      ?>
      >
      3</option>

      <option value="4"
      <?php
      if($result['allot_seat']=='4')
      {
      echo"selected";
      }
      ?>
      >
      4</option>

      <option value="5"
      <?php
      if($result['allot_seat']=='5')
      {
      echo"selected";
      }
      ?>
      >
      5</option>
            </select>
            </div>

            
            <div class="mb-3">
            <label>Empty Seat</label>
            <select class="form-select shadow-none" name="empty" required>
                <option value="">Select</option>
                <option value="0"
                <?php
                if($result['empty_seat']=='0')
                {
                echo"selected";
                }
                ?>
                >
                0</option>
                <option value="1"
                <?php
                if($result['empty_seat']=='1')
                {
                echo"selected";
                }
                ?>
                >
                1</option>

                <option value="2"
                <?php
                if($result['empty_seat']=='2')
                {
                echo"selected";
                }
                
                ?>
                >
                2</option>
                <option value="3"
                <?php
                if($result['empty_seat']=='3')
                {
                echo"selected";
                }
                ?>
                >
                3</option>

                <option value="4"
                <?php
                if($result['empty_seat']=='4')
                {
                echo"selected";
                }
                ?>
                >
                4</option>

                <option value="5"
                <?php
                if($result['empty_seat']=='5')
                {
                echo"selected";
                }
                ?>
                >
                5</option>
             </select>
                        </div>

            
            
                        <div class="mb-3">
            <label>Allot Status</label>
            <select class="form-select shadow-none" name="status" required>
            <option value="">Select</option>
      <option value="Yes"
      <?php
      if($result['allot_status']=='Yes')
      {
      echo"selected";
      }
      ?>
      >
      Yes</option>

      <option value="No"
      <?php
      if($result['allot_status']=='No')
      {
      echo"selected";
      }
      
      ?>
      >
      No</option>
            </select>
            </div>

            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success" name="update" >UPDATE</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>

</body>
</html>
       


<?php require('./includes/footer.php')?>






    