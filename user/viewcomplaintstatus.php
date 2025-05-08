    
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Complaints</title>

    <style>
            @media (max-width: 576px) {
        .home-content h3 {
            font-size: 18px;
            text-align: center;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table th, .table td {
            font-size: 12px;
            padding: 6px;
            text-align: center;
            white-space: nowrap;
        }

        .btn {
            padding: 4px 8px;
            font-size: 12px;
        }

        .bx-arrow-back {
            font-size: 30px !important;
            display: block;
            margin-bottom: 10px;
        }

        .col-md-10 {
            padding: 0;
        }
        .container-fluid d-flex
        {
            justify-content: center;
        }
}

    </style>
     
</head>
<body>
<?php require('./includes/header.php')?>

<?php
include('includes/db_config.php');
if(isset($_GET['id']))
{
    $regno =$_GET['id'];

    $query="select * from complaint where userid='$regno'";
    $data=mysqli_query($con,$query);
}

?>

<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden  ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
               <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">My Complaints</h3>
                <hr>
                <div class="row">
                        <div class="col-md-12 ">
                            <div class="table table-responsive">
                            <table class="table table-bordered   " >
                                <thead class="text-dark">
                                    <tr>
                                        <th class="text-center">Sr No.</th>
                                        <th class="text-center">Complaint Number</th>
                                        <th  class="text-center">Complaint Type</th>
                                        <th class="text-center">Complaint Status</th>
                                        <th class="text-center">Complaint Reg. Date</th>
                                        <th class="text-center">Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                            <?php

                            if(!$data)
                            { 
                                die("connection failed".mysqli_error($con));
                            }
                            else
                            {
                                $sr=1;
                                while($row=mysqli_fetch_assoc($data))
                                {
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $sr?></td>   
                                    <td class="text-center"><?php echo $row['complaint_no']?></td>
                                    <td class="text-center"><?php echo $row['complaint_type']?></td>
                                    <td class="text-center"><?php echo $row['complaint_status']?></td>
                                    <td class="text-center"><?php $wop = $row['registration_date']; print date("d-m-Y",strtotime($wop))?></td>
                                
                                    <td class="text-center"><a href="student-view-complaint-details.php?id=<?php echo $row['complaint_no']?>" class="btn btn-primary me- px-4 ">VIEW</a>
                                </tr> 
                                <?php $sr++;
                                }
                            }                  
                            ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

</body>
</html>




<?php require('./includes/footer.php')?>
