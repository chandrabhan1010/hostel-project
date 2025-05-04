<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Manage Id Card</title>
    <style>
        .addroom   
         {
            float: right !important;
         } 
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
       @media (max-width: 1500px) 
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



<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11 col-12  p-0 ms-3 ">
                <!-- Design Form -->    
    <div class="home-content align-items-center ">
    <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
    <h3 class="mt-5"style="font-family: Georgia, 'Times New Roman', Times, serif;">Manage ID Card</h3>
    <hr>

        <?php
        include('includes/db_config.php');

        $query = "SELECT * FROM idcard";

        $result = mysqli_query($con, $query);

        $total=mysqli_num_rows($result);

        if (!$result) 
        {
            die("connection failed" . mysqli_error($con));
        } 
        else{

            if(!$result)
                { 
                    die("connection failed".mysqli_error($conn));
                }
                else
                {
                    echo <<<HTML

                            <div class="row">
                            <div>
                             <a href="addidcard.php" type="button" class="btn btn-success shadow-none mb-3 addroom " ><i class="bi bi-plus-lg"></i> Generate New Id Card</a>
                             </div> 
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr. No.</th>
                                                <th class="text-center">Enrollment No.</th>
                                                <th class="text-center">Student Name</th>
                                                <th class="text-center">Father Name</th>
                                                <th class="text-center">Room No.</th>
                                                <th class="text-center">Course</th>
                                                <th class="text-center col-4 crud">Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                            HTML;
                        {
                            $sr=1;
                            while($row=mysqli_fetch_assoc($result))
                            {
                                ?>
                            <tr> 
                                <td class="text-center" data-label="Sr. No."><?php echo $sr?></td>      
                                <td class="text-center" data-label="Enrollment No."><?php echo $row['enroll_no']?></td>
                                <td class="text-center" data-label="Student Name"><?php echo $row['name']?></td>
                                <td class="text-center" data-label="Father Name"><?php echo $row['father_name']?></td>
                                <td class="text-center" data-label="Room No"><?php echo $row['room_no']?></td>
                                <td class="text-center" data-label="Course"><?php echo $row['course']?></td>

                               
                                <td class="text-center" data-label="Operations">
                                    <div class="d-flex flex-wrap justify-content-center gap-2">

                                        <a href="../report-generate/viewidcard.php?enrollno=<?php echo $row['enroll_no']?>"class="btn btn-primary me-3 px-5">View</a>

                                        
                                        <a href="updateidcard.php?enrollno=<?php echo $row['enroll_no']?>"class="btn btn-success me-3 px-5">Update</a>


                                        <a href="deleteidcard.php?enrollno=<?php echo $row['enroll_no']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-5">Delete</a>
                                    </div>
                                 </td>
                             </tr>

                            <?php
                            $sr++;
                            }
                            } 
                }   
        }
echo '</tbody>';
echo '</table>';
echo '</div>';      
echo '</div>';
?>

<script>
     function checkdelete()
     {
        return confirm('Are you sure you want to reject this application request ?');
     }
</script>

<?php require('./includes/footer.php')?>
</body>
</html>






    