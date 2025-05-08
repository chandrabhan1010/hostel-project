<?php
$roomno=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Show users</title>
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

<div class="container-fluid">
    <div class="row">
        
        <div class="col-lg-11 col-12  p-0 ms-3 ">
            
            <div class="home-content align-items-center ">
            <a href="manage_room.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
            <h3 class="mt-5">Room No. <?php echo"$roomno";?> </h3>
            <hr>
            <h3 style="color:green">Student List</h3>

            <?php
            include('includes/db_config.php');
            $query="select * from studentregistration where room_no='$roomno'";
            $result=mysqli_query($con,$query);
            $total=mysqli_num_rows($result);
            if(!$total)
            {
                echo"<h3 style='color:red'>ROOM RECORD NOT FOUND</h3>";
                
            }
            else{
                
                if(!$result)
                    { 
                        die("connection failed".mysqli_error($con));
                    }
                    else
                    {
                        echo '<div class="row">';
                        echo'<div class="table-responsive">';
                        echo'<table class="table table-bordered   table-hover">';
                                echo '<thead class=" text-dark ">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th> Student Image</th>
                                        <th>Registration No.</th>
                                        <th>Student Name</th>
                                        <th>Father Name</th>
                                        <th>Program Type</th>
                                        <th>Category</th>
                                        <th>Course</th>
                                        <th>Semester</th>
                                        <th>Stay From</th>
                                        <th>State</th>   
                                    </tr>
                                </thead>';
                                echo '<tbody>';
                
                            {
                                $sr=1;
                                while($row=mysqli_fetch_assoc($result))
                                {
                                ?>
                
                                <tr> 
                                    <td><?php echo $sr?></td>
                                    <td><?php echo "<img src='".$row['std_img']."' height='60px' width='5px'>"?></td>      
                                    <td><?php echo $row['registration_no']?></td>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['fname']?></td>
                                    <td><?php echo $row['program_type']?></td>
                                    <td><?php echo $row['category']?></td>
                                    <td><?php echo $row['course']?></td>
                                    <td><?php echo $row['semester']?></td>
                                    <td><?php echo $row['stay_from']?></td>
                                    <td><?php echo $row['state']?></td>
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






    