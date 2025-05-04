<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>UG New Application</title>
    <style>
        @media (max-width: 768px) 
        {
            .home-content h3
            {
            font-size: 10px;
            text-align: center;
            }
            .table th 
            {
                font-size: 5px;
            }
            .table td
            {
                font-size: 3px;
            }
        }
    </style>
        
</head>
<body>
<?php require('./includes/header.php')?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11  p-0 ms-3 ">
            <!-- Design Form -->    
                <div class="home-content"  style="padding-left: 0; margin-left: 0;">
                <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                    <h3 class="mt-5">#UG STUDENTS NEW APPLICATION</h3>
                    <hr>
                    <?php
                    include('includes/db_config.php');
                    $query = "SELECT * FROM ugregistration WHERE hostel_status='No'";
                    $result = mysqli_query($con, $query);
                    $total = mysqli_num_rows($result);
                    $fetch_src = FETCH_SRC;

                    if (!$total) {
                        echo "<h3 class='text-center mt-5' style='color:red;'>NEW APPLICATION NOT FOUND</h3>";
                    } else {
                        if (!$result) { 
                            die("Connection failed: " . mysqli_error($con));
                        } else {
                            echo '<div class="table-responsive">';
                            echo '<table class="table table-bordered table-striped table-hover">';
                            echo '<thead class="thead-dark">
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Cuet No.</th>
                                        <th>Student Name</th>
                                        <th>Father Name</th>
                                        <th>Category</th>
                                        <th>Course</th>
                                        <th>State</th>
                                        <th>Distance (km)</th>
                                        <th class="text-center action">Actions</th>
                                    </tr>
                                  </thead>';
                            echo '<tbody>';

                            $sr = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?= $sr ?></td>   
                        <td><?= $row['cuet_no'] ?></td>
                        <td><?= $row['sname'] ?></td>
                        <td><?= $row['father_name'] ?></td>
                        <td><?= $row['category'] ?></td>
                        <td><?= $row['course'] ?></td>
                        <td><?= $row['state'] ?></td>
                        <td><?= $row['distance'] ?></td>
                        <td>
                            <div class="d-flex flex-row flex-nowrap gap-2 justify-content-center">
                                <a href="ugapplicationdata.php?id=<?= $row['cuet_no'] ?>" class="btn btn-primary btn-sm">View</a>
                                
                                <a href="ugapproved.php?regno=<?php echo $row['registration_no']?> &image=<?php echo $row['std_img']?>  &sname=<?php echo $row['sname']?>  &fname=<?php echo $row['father_name']?> &mname=<?php echo $row['mother_name']?>  &dob=<?php echo $row['date_of_birth']?> &category=<?php echo $row['category']?> &religion=<?php echo $row['religion']?> &programtype=<?php echo $row['program_type']?> &course=<?php echo $row['course']?> &mobile=<?php echo $row['phone_no']?> &email=<?php echo $row['email_id']?> &address=<?php echo $row['address']?> &state=<?php echo $row['state']?> &distance=<?php echo $row['distance']?> &document=<?php echo $row['aadhar_pdf']?>" class="btn btn-success btn-sm ">Approve</a>

                                <a href="rejectapplication.php?id=<?= $row['email_id'] ?>&program=<?= $row['program_type'] ?>" 
                                   onclick="return checkdelete()" 
                                   class="btn btn-danger btn-sm">Reject</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                            $sr++;
                            }
                            echo '</tbody>';
                            echo '</table>';
                            echo '</div>'; // table-responsive
                        }
                    }
                    ?>
                </div>   
        </div>
    </div>
</div>
<script>
     function checkdelete()
     {
        return confirm('Are you sure you want to reject this application request ?');
     }

</script>

<?php require('./includes/footer.php')?>
</body>
</html>






    