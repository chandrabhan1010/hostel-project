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
                <!-- Design Form -->    
    <div class="home-content align-items-center ">
    <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
    <h3 class="mt-5">Show Users</h3>
    <hr>
    
        <?php
        include('includes/db_config.php');

        $query = "SELECT * FROM user_cred";

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
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr. No.</th>
                                                <th class="text-center">Student Name</th>
                                                <th class="text-center">Email Id</th>
                                                <th class="text-center">Username
                                                <th class="text-center">Password</th>
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
                                <td class="text-center" data-label="Student name."><?php echo $row['sname']?></td>
                                <td class="text-center" data-label="Email Id"><?php echo $row['user_email']?></td>
                                <td class="text-center" data-label="Username"><?php echo $row['user_name']?></td>
                                <td class="text-center" data-label="Rooom No"><?php echo $row['user_pass']?></td>

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






    