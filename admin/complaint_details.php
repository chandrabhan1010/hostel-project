
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
     if(isset($_GET['id']))
     {
        $complaint_no = $_GET['id'];
        echo '<h3> #'.$complaint_no.' Details</h3>';

        $query="select * from complaint where complaint_no='$complaint_no'";
        $data=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($data);

        $query1="select * from complainthistory  where complaint_no='$complaint_no' ";
        $data1=mysqli_query($con,$query1);
     }
     
    ?> 

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;"><?php echo '<h3> # '.$complaint_no.'  Details</h3>';?></h3>
                <hr>
                <table id="zctb" class="table table-bordered  dataTable" cellspacing="0" width="100%" border="1">
                <tbody>
                <tr>
                <td colspan="6" style="text-align:center; color:blue"><h4>Complaint Realted Info</h4></td>
                </tr>
                <tr>
                    <th>Complaint Number </th>
                    <td><?php echo $row['complaint_no']?></td>

                    <th>Registration Date</th>
                    <td><?php $wop = $row['registration_date']; print date("d-m-Y",strtotime($wop))?></td>
                </tr> 

                <tr>
                    <th>User Id</th>
                    <td><?php echo $row['userid']?></td>

                    <th>Student Name</th>
                    <td><?php echo $row['name']?></td>
                </tr> 

                <tr>
                    <th>Rooom Number </th>
                    <td><?php echo $row['roomno']?></td>

                    <th>Mobile Number</th>
                    <td><?php echo $row['mobile']?></td>
                </tr> 

                <tr>
                <th>Complaint Type </th>
                <td><?php echo $row['complaint_type']?></td>
                <th>File (if any)</th>
                <td colspan="5"><?php echo"<a href='".$row['complaint_doc']."'  target='blank' >FILE</a>" ?></td>


                </td>

                </tr>

                <tr>
                <th>Complaint Details</th>
                <td colspan="3"><?php echo $row['complaint_details']?></td>
                </tr>
                <tr>
                <th>Complaint Status </th>
                <td colspan="3"><?php echo $row['complaint_status']?></td>
                </tr>
                </tbody>
                </table>

                <table id="zctb" class="table table-bordered " cellspacing="0" width="100%" border="1">
                <thead>
                <tr>
                    <th colspan="3" style="color:blue; font-size:18px; text-align:center">Complaint History</th>
                </tr>
                <tr>
                    <th>Complaint Remark</th>
                    <th>Complaint Status</th>
                    <th>Posting Date</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    while($row1=mysqli_fetch_assoc($data1))
                    {
                    ?>
                    <tr>
                        <td ><?php echo $row1['complaint_remark']?></td>
                        <td><?php echo $row1['complaint_status']?></td>
                        <td><?php $wop = $row1['posting_date']; print date("d-m-Y",strtotime($wop))?></td>
                    </tr>

                    <?php
                    }?>
                </tr>
                </tbody>
                </table>
                <?php
                
                ?>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php require('./includes/footer.php')?>
