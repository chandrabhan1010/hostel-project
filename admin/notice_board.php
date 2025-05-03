<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    <?php require('./includes/links.php')?>

    
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
    <h3 class="mt-5" style="font-family: Georgia, 'Times New Roman', Times, serif;">Manage Hostel Notice Board</h3>

    <hr>
        <?php
        include('includes/db_config.php');

        $query = "SELECT * FROM notice";

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
                            <a href="addnotice.php" type="button" class="btn btn-dark text-white shadow-none mb-3 addroom " ><i class="bi bi-plus-lg"></i>Post New Notice</a>
                            </div> 
                                <div class="table-responsive">
                                    <table class="table table-bordered  table-hover">
                                        <thead class="text-dark">
                                            <tr>
                                                <th class="text-center">Sr. No.</th>
                                                <th class="text-center">Notice Title Name</th>
                                                <th class="text-center">Notice Decription</th>
                                                <th class="text-center">Link Title Name</th>
                                                <th class="text-center">Post Date</th>
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
                                <td class="text-center" data-label="Notice Title"><?php echo $row['title']?></td>
                                <td class="text-center" data-label="Description"><?php echo $row['description']?></td>
                                <td class="text-center" data-label="Link Title"><?php echo $row['link_title']?></td>

                                <td><?php $sow = $row['post_date']; print date("d-m-Y",strtotime($sow))?></td>
             
                                <td class="text-center" data-label="Operations">
                                    <div class="d-flex flex-wrap justify-content-center gap-2">
                                       <?php echo"<a href='".$row['file']."' class='btn btn-primary me-3 px-5' target='blank' >VIEW</a>" ?>

                                       <a href="updatenotice.php?id=<?php echo $row['notice_id']?>" class="btn btn-success me-3 px-5 ">Edit</a>

                                        <a href="deletenotice.php?id=<?php echo $row['notice_id']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-5 ">Delete</a></td> 
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






    