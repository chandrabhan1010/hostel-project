<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Close Complaints</title>
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
        <div class="col-lg-11 col-12  p-0 ms-5 ">
                <!-- Design Form -->    
    <div class="home-content align-items-center ">
    <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
    <h3 class="mt-5" style="font-family: Georgia, 'Times New Roman', Times, serif;">Close Complaints</h3>
    <hr>
    <div class="row">
        <div class="col-md-10 col-xs-8">
            <div class="table table-responsive">
            <table class="table table-bordered table-hover " >
                <thead class="text-dark">
                    <tr>
                        <th>Sr No.</th>
                        <th>Complaint Number</th>
                        <th >Complaint Type</th>
                        <th >Room Number</th>
                        <th>Complaint Status</th>
                        <th >Complaint Reg. Date</th>
                        <th >Action</th> 
                    </tr>
                </thead>
                <tbody>
            <?php
            include('includes/db_config.php');
            $query="select * from complaint";
            $data=mysqli_query($con,$query);
            if($data)
            { 
                $query1="select * from complaint ";
                $data1=mysqli_query($con,$query1);
                $sr=1;
                while($row=mysqli_fetch_assoc($data1))
                {
                 ?>
                <tr>
                    <td><?php echo $sr?></td>   
                    <td><?php echo $row['complaint_no']?></td>
                    <td><?php echo $row['complaint_type']?></td>
                    <td><?php echo $row['roomno']?></td>
                    <td><?php echo $row['complaint_status']?></td>
                    <td><?php $wop = $row['registration_date']; print date("d-m-Y",strtotime($wop))?></td>
                    <?php
                    if($row['complaint_status']=='New')
                    {
                    ?>
                        <td style="margin-left:100px;"><a href="complaintaction.php?id=<?php echo $row['complaint_no']?>" class="btn btn-primary me- px-4 ">VIEW</a>
                   
                   <?php
                    }
                    ?>
                    <?php
                    if($row['complaint_status']=='Closed')
                    {
                    ?>
                        <td style="margin-left:100px;"><a href="complaint_details.php?id=<?php echo $row['complaint_no']?>" class="btn btn-primary me- px-4 ">VIEW</a>
                   
                   <?php
                    }
                    ?>
                    <?php
                    if($row['complaint_status']=='In Progress')
                    {
                    ?>
                        <td style="margin-left:100px;"><a href="complaintaction.php?id=<?php echo $row['complaint_no']?>" class="btn btn-primary me- px-4 ">VIEW</a>
                   
                   <?php
                    }
                    ?>
                </tr> 
                <?php $sr++;
                }
            }
            else
            {
                echo "<h3 style='color:red';>Complaints Not Found</h3>";
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

<script>
     function checkdelete()
     {
        return confirm('Are you sure you want to reject this application request ?');
     }
</script>

<?php require('./includes/footer.php')?>
</body>
</html>






    