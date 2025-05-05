<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Manage Students</title>
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
         .main .content
         {
            height: 200vh;
            width: 100%;
            margin-right: 30px;
         }
         .select1
         {
            width: 10%;
            padding: 7px;
            position: relative;
            border-radius: 5px;
            height: 40px;
            margin-bottom: 20px;
            
         }
         .searchbar
         {
            width: 20%;
            padding: 7px;
            position: relative;
            bottom: 10px;
            border-radius: 5px;
            text-decoration: none;
            outline: none;
         }
         #button1
         {
            position:relative;
            left: 50px;
            height: 40px;
            bottom: 10px;
         }
         .print
         {
            font-size: 30px;
            margin-bottom: 20px;
            float: right;
         }

         @media (max-width: 576px)
         {
        .searchbar
         {
            width: 70%;
            height: 40px;
            border-radius: 5px;
            text-decoration: none;
            outline: none;
         }
         #button1
         {
            position:relative;
            left: 10px;
            height: 40px;
            bottom: 10px;
         }
         .select1
         {
            width: 70%;
            height: 30px;
            font-size: 10px;
         }

         }   
    </style>

   
</head>
<body>
<?php require('./includes/header.php')?>

<?php
if(@$_REQUEST['search']==null && @$_REQUEST['searchfield']==null )
{
    $search =null;
}
else
{
    $searchData = $_REQUEST['search'];
    $searchField = $_REQUEST['searchfield'];

     $search = " WHERE $searchField like '%$searchData%'";
}
?> 

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11 col-12  p-0 ms-3 ">
                <!-- Design Form -->    
    <div class="home-content align-items-center ">
    <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
    <h3 class="mt-5" style="font-family: Georgia, 'Times New Roman', Times, serif;">Manage Students</h3>
    <hr>
    <a href="../report-generate/printallstudentlist.php"><i class='bx bxs-printer print'></i></a>
    <form action="" method="post">
  
    <select name="searchfield" class="select1" required>
        <option value="">Serach By</option>
        <option value="registration_no">Registration No.</option>
        <option value="name">Name </option>
        <option value="fname">Father Name</option>
        <option value="room_no">Room No</option>
        <option value="category">Category</option>
        <option value="course">Course</option>
        <option value="state">State</option>
    </select>

    <div class="search-group">
    <input type="text" name="search" class="searchbar" placeholder="Search">
    <button id="button1" class="btn btn-outline-success shadow-none" type="submit">Search</button>
   </div>
    
</form>
    <?php
        include('includes/db_config.php');

        $query = "SELECT * FROM studentregistration where  program_type='PG'".$search;

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
                                                <th class="text-center">Reg No.</th>
                                                <th class="text-center">Student Name</th>
                                                <th class="text-center">Father Name</th>
                                                <th class="text-center">Room No.</th>
                                                <th class="text-center">Category</th>
                                                <th class="text-center">Program Type</th>
                                                <th class="text-center">Course</th>
                                                <th class="text-center">State</th>
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
                                <td class="text-center" data-label="Registration No."><?php echo $row['registration_no']?></td>
                                <td class="text-center" data-label="Name"><?php echo $row['name']?></td>
                                <td class="text-center" data-label="Father Name"><?php echo $row['fname']?></td>
                                <td class="text-center" data-label="Room No"><?php echo $row['room_no']?></td>
                                <td class="text-center" data-label="Category"><?php echo $row['category']?></td>
                                <td class="text-center" data-label="Program Type"><?php echo $row['program_type']?></td>
                                <td class="text-center" data-label="Course"><?php echo $row['course']?></td>
                                <td class="text-center" data-label="State"><?php echo $row['state']?></td>
                                
                                <td class="text-center" data-label="Operations">
                                    <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <a href="user_profile.php?id=<?php echo $row['registration_no']?>" class="btn btn-primary me-3 px-5">View</a>
                                        <a href="updatedetails.php?regno=<?php echo $row['registration_no']?> &roomno=<?php echo $row['room_no']?> &email=<?php echo $row['email_id']?>" class="btn btn-success me-3 px-5">Update</a>
                                        <a href="deletestudent.php?id=<?php echo $row['registration_no']?> &roomno=<?php echo $row['room_no']?> &email=<?php echo $row['email_id']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-5">Delete</a>
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

<script src="search.js"></script>

<script>
     function checkdelete()
     {
        return confirm('Are you sure you want to reject this application request ?');
     }
</script>

<?php require('./includes/footer.php')?>
</body>
</html>





    