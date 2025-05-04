<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>UG New Application</title>
    <style>
        .addroom   
         {
            float: right;
         } 

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
                    <h3 class="mt-5">Hostel Warden Details</h3>

  
                    <hr>

                    <?php
                    include('includes/db_config.php');
                    $query = "SELECT * FROM hostel_warden";
                    $result = mysqli_query($con, $query);
                    $total = mysqli_num_rows($result);
                    $fetch_src = FETCH_SRC;

                    if (!$total) {
                        echo "<h3 class='text-center mt-5' style='color:red;'>WARDEN DETAILS NOT FOUND</h3>";
                    } else {
                        if (!$result) { 
                            die("Connection failed: " . mysqli_error($con));
                        } else {

                            echo '<div class="table-responsive">';

                            echo '<a href="add_warden.php" type="button" class="btn btn-dark text-white shadow-none mb-3 addroom " ><i class="bi bi-plus-lg"></i>Add Warden</a>';
                            
                            echo '<table class="table table-bordered table-striped table-hover">';
                            echo '<thead class="thead-dark">
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Warden_Type</th>
                                        <th>Work</th>
                                        <th>Department</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                  </thead>';
                            echo '<tbody>';

                            $sr = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?= $sr ?></td>   
                        <td><?php echo "<img src='".$row['image']."' height='60px' width='5px'>"?></td>    
                        <td><?= $row['warden_name'] ?></td>
                        <td><?= $row['warden_type'] ?></td>
                        <td><?= $row['work'] ?></td>
                        <td><?= $row['department'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td>

                            <div class="d-flex flex-row flex-nowrap gap-2 justify-content-center">

                                <a href="edit_warden.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm"><i class='bx bxs-edit'></i></a>
                                
                                <a href="delete_warden.php?id=<?php echo $row['id']?>" onclick="return checkdelete()"  class="btn btn-danger btn-sm"><i class='bx bx-trash'></i></a>
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






    