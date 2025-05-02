<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('./includes/links.php')?>
    <title>Profile</title>
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
        .table th
        {
            font-size: 20px;
            font-weight: 900;
        }
        .table td
        {
            font-size: 20px;
            
        }
        
    </style>
     
</head>
<body>
<?php require('./includes/header.php')?>

<div class="container-fluid">
    <div class="row ms-5">
 
        <div class="col-lg-11 col-12  p-0 ms-5 ">   
             
            <div class="home-content align-items-center ms-5 ">
           
            <a href="manage_student.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>

                <h1 class="mt-2 ">Student Profile</h1>
                <hr>
                <?php
                    include('includes/db_config.php');
                    if (isset($_GET['id'])) 
                    {
                        $reg_no = $_GET['id'];

                        $query = "select * from studentregistration where registration_no=$reg_no";
                        $result = mysqli_query($con, $query);
                        $total = mysqli_num_rows($result);
                        if (!$result) 
                        {
                            die("connection failed" . mysqli_error($con));
                        } 
                        else 
                        {
                            while ($row = mysqli_fetch_assoc($result)) 
                            {

                                $roomno =$row['room_no'];

                                $regno =$row['registration_no'];

                                $sql="select * from rooms where room_no=$roomno";
                                $data=mysqli_query($con,$sql);

                                $sql1="select * from documents where regno=$regno";
                                $data1=mysqli_query($con,$sql1);

                            
                                ?>
                            <div class="col-md-12">

                                <h2 class="page-title" style="margin-top:3%">Rooms Details</h2>

                                    <div class="panel panel-default">

                                    <div class="panel-heading" style="color:Green;font-size:20px">All Room Details</div>

                                        <div class="panel-body">

                                        <table id="zctb" class="table table-bordered  dataTable" cellspacing="0" width="100%" border="1">
                                                                                            
                                        <tbody>

                                            <tr>
                                            <td colspan="6" style="text-align:center; "><h3 style="color:blue;">Room Related Information</h3></td>
                                            <tr>
                                                <tr>
                                                <td colspan="6"><?php echo "<img  style='border:3px solid black;height:150px;width:150px;float:right' src='" . $row['std_img'] . "' height='100px' width='100px'>" ?></td>
                                                </tr>
                                                <th>Registration Number :</th>
                                                <td><?php echo $row['registration_no'] ?></td>
                                                <th>Stay From :</th>
                                                <td colspan="3"><?php $wop = $row['stay_from']; print date("d-m-Y",strtotime($wop))?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Room no :</b></td>
                                                <td><?php echo $row['room_no'] ?></td>

                                            <?php 	
                                            while ($r=mysqli_fetch_assoc($data))
                                                {
                                                    
                                                ?>
                                                

                                                <td><b>Seater :</b></td>
                                                <td><?php echo $r['seater'] ?></td>
                                                <?php
                                                }
                                                ?>
                                
                                                
                                                <td><b>Duration In Year :</b></td>
                                                <td colspan="3"><?php echo $row['duration'] ?> </td>
                                            </tr>


                                            <tr>
                                                <td colspan="6"><h4 style="color:red;">Personal Information</h4></td>
                                                </tr>
                                                </tr>


                                            <tr>
                                                <td><b>Reg No. :</b></td>
                                                <td><?php echo $row['registration_no'] ?></td>
                                                <td><b>Full Name :</b></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><b>Adhaar Number :</b></td>
                                                <td><?php echo $row['aadhar_no'] ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Father Name  :</b></td>
                                                <td><?php echo $row['fname'] ?></td>

                                                <td><b>Mother Name :</b></td>
                                                <td><?php echo $row['mname'] ?></td>

                                                <td><b>Category :</b></td>
                                                <td><?php echo $row['category'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Date Of Birth :</b></td>
                                                <td><?php $wop = $row['dob']; print date("d-m-Y",strtotime($wop))?></td>

                                                <td><b>Religion :</b></td>
                                                <td><?php echo $row['religion'] ?></td>

                                                <td><b>Blood Group :</b></td>
                                                <td><?php echo $row['blood_group'] ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Mobile Number :</b></td>
                                                <td><?php echo $row['contact_no'] ?></td>

                                                <td><b>Email Id :</b></td>
                                                <td><?php echo $row['email_id'] ?></td>

                                                <td><b> Physical Disable Personal :</b></td>
                                                <td><?php echo $row['physical_disable'] ?></td>
                                            </tr>


                                            <tr>
                                                <td><b>Emergency Contact No. :</b></td>
                                                <td><?php echo $row['emergency_no'] ?></td>

                                                <td><b>Guardian Name :</b></td>
                                                <td><?php echo $row['guardian_name'] ?></td>

                                                <td><b>Guardian Relation :</b></td>
                                                <td><?php echo $row['guardian_relation'] ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Guardian Contact No. :</b></td>
                                                <td colspan="6"><?php echo $row['guardian_contact_no'] ?></td>
                                                </tr>

                                                <tr>
                                                <td colspan="6" ><h4 style="color:red">Academic Information</h4></td>
                                            </tr>

                                            <tr>
                                                <td><b>Enrollment Number :</b></td>
                                                <td ><?php echo $row['enrollment'] ?></td>

                                                <td><b>ABC ID :</b></td>
                                                <td ><?php echo $row['abc_id'] ?></td>

                                                <td><b>Admission No. :</b></td>
                                                <td><?php echo $row['admission_no'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Semester:</b></td>
                                                <td><?php echo $row['semester'] ?></td>

                                                <td><b>Course Type:</b></td>
                                                <td><?php echo $row['program_type'] ?></td>

                                                <td><b>Course Name:</b></td>
                                                <td ><?php echo $row['course'] ?></td>
                                            </tr>
                                                

                                                <tr>
                                                <td colspan="6" ><h4 style="color:red">Addresses</h4></td>
                                            </tr>


                                            <tr>
                                                <td><b>Address according to the ID Proof :</b></td>
                                                <td colspan="2"><?php echo $row['address'] ?></td>

                                                <td><b>Distance from Home Town to University Campus in KM :</b></td>
                                                <td colspan="2"><?php echo $row['distance']?> km</td>
                                            </tr>

                                            <tr>
                                                <td><b>City :</b></td>
                                                <td ><?php echo $row['city'] ?></td>

                                                <td><b>State :</b></td>
                                                <td><?php echo $row['state'] ?></td>

                                                <td><b>Pin Code :</b></td>
                                                <td><?php echo $row['pincode'] ?></td>
                                            </tr>

                                            
                                            <tr>
                                                <td colspan="6" style="color:red"><h4>Documents</h4></td>
                                            </tr>
                                            <?php 	
                                            while ($row1=mysqli_fetch_assoc($data1))
                                                {
                                                    
                                                ?>
                                            <tr>
                                                <td><b>Adhaar Card :</b></td>
                                                <td colspan="5"><?php echo"<a href='".$row1['aadhar']."' class='btn btn-primary me-3 px-3' target='' >VIEW</a>" ?></td>

                                            </tr>

                                            <tr>
                                                <td><b>Cast Certificate :</b></td>
                                                <td colspan="5"><?php echo"<a href='".$row1['cast_certificate']."' class='btn btn-primary me-3 px-3' target='' >VIEW</a>" ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Domicile Certificate :</b></td>
                                                <td colspan="5"><?php echo"<a href='".$row1['domicile_certificate']."' class='btn btn-primary me-3 px-3' target='' >VIEW</a>" ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Semester Fee Reciept</b></td>
                                                <td colspan="5"><?php echo"<a href='".$row1['semester_fee_receipt']."' class='btn btn-primary me-3 px-3' target='' >VIEW</a>" ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Hostel Fee Reciept</b></td>
                                                <td colspan="5"><?php echo"<a href='".$row1['hostel_fee_receipt']."' class='btn btn-primary me-3 px-3' target='' >VIEW</a>" ?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                              
                                <?php
                            
                        }
                        }
                    } 
                    else 
                    {
                    echo "<h3 style='color:red';>Record Not Found</h3>";
                    }
                ?>


            </div>
        </div>
    </div>
</div>
        
   



<?php require('./includes/footer.php')?>
</body>
</html>






    