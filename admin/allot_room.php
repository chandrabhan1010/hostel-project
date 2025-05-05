<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Manage Room</title>
    <style>
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
    <h3 class="mt-5">Manage Rooms</h3>
    <hr>
     <div class="addroom">
     <button type="button" class="btn btn-success shadow-none mb-3 " data-bs-toggle="modal" data-bs-target="#addroom"><i class="bi bi-plus-lg"></i>Add Room</button>
      </div>
    <form action="" method="post">
    <select name="searchfield" class="select1" required>
        <option value="">Serach By</option>
        <option value="room_no">Room Number</option>
        <option value="floor">Floor</option>
        <option value="seater">Seater</option>

    </select>

    <div class="search-group">
    <input type="text" name="search" class="searchbar" placeholder="Search">
    <button id="button1" class="btn btn-outline-success shadow-none" type="submit">Search</button>
   </div>
    
</form>
        <?php
        include('includes/db_config.php');

        $query = "SELECT * FROM rooms where allot_status='Yes'".$search;

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
                                                <th class="text-center">Room No.</th>
                                                <th class="text-center">Floor</th>
                                                <th class="text-center">Seater</th>
                                                <th class="text-center">Allotted Seats</th>
                                                <th class="text-center">Empty Seats</th>
                                                <th class="text-center">Allot Status</th>
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
                                <td class="text-center" data-label="Room No."><?php echo $row['room_no']?></td>
                                <td class="text-center" data-label="Floor"><?php echo $row['floor']?></td>
                                <td class="text-center" data-label="Seater"><?php echo $row['seater']?></td>
                                <td class="text-center" data-label="Allotted Seats"><?php echo $row['allot_seat']?></td>
                                <td class="text-center" data-label="Empty Seats"><?php echo $row['empty_seat']?></td>
                                <td class="text-center" data-label="Allot Status"><?php echo $row['allot_status']?></td>
                               
                                <td class="text-center" data-label="Operations">
                                    <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <a href="viewroom.php?id=<?php echo $row['room_no']?>" class="btn btn-primary me-3 px-5" >View</a>

                                        <a href="updateroom.php?room_no=<?php echo $row['room_no']?>" class="btn btn-success me-3 px-5">Update</a>
                                        
                                        <a href="deleteroom.php?room_no=<?php echo $row['room_no']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-5">Delete</a>
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

<!-- add Modal -->
<div class="modal fade" id="addroom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog custom-modal">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add New Room</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="addroom.php" method="POST">
       <div class="modal-body">

            <div class="form-group">
                <label>Room Number</label>
                <input type="number" name="room_no" class="form-control" placeholder="Enter Room No." required>
            </div>

            <label>Floor</label>
            <select class="form-select" name="floor" required>
           
                <option selected>Choose Floor</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <label>Seater</label>
            <select class="form-select" name="seater" required>
         
                <option selected>Select Seater</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addroom" class="btn btn-primary">ADD</button>
      </div>
    </form>
    </div>
  </div>
</div>



<script src="search.js"></script>

<script>
     function checkdelete()
     {
        return confirm('Are you sure you want to reject this application request ?');
     }
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<?php require('./includes/footer.php')?>
</body>
</html>






    