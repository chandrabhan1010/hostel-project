<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Fee Details</title>
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
    <h3 class="mt-5">Student Fee Related Information</h3>
    <hr>
        <?php
        include('includes/db_config.php');

        $query = "SELECT * FROM paymentdetails";

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
                                    <table class="table table-bordered  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr. No.</th>
                                                <th class="text-center">Enrollment No.</th>
                                                <th class="text-center">Student Name</th>
                                                <th class="text-center">Category</th>
                                                <th class="text-center">Program Type</th>
                                                <th class="text-center">Pay Year</th>
                                                <th class="text-center">Amount</th>
                                                <th class="text-center">Payment Status</th>
                                                <th class="text-center col-1">Operations</th>
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
                                <td class="text-center" data-label="Enrollment No."><?php echo $row['enrollment']?></td>
                                <td class="text-center" data-label="Student Name"><?php echo $row['name']?></td>
                                <td class="text-center" data-label="Category"><?php echo $row['category']?></td>
                                <td class="text-center" data-label="Program Type"><?php echo $row['course_type']?></td>
                                <td class="text-center" data-label="Pay Year"><?php echo $row['pay_year']?></td>
                                <td class="text-center" data-label="Amount"><?php echo $row['amount']?></td>
                                <td class="text-center" data-label="Payment Status"><?php echo $row['payment_status']?></td>

                               
                                <td><a href="viewpaymentdetails.php?enroll=<?php echo $row['enrollment']?>&year=<?php echo $row['pay_year']?>" class="btn btn-primary me-3 px-5  ">View</a>
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






    