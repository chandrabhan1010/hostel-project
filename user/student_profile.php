<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiw Profile</title>
    <?php require('./includes/links.php');?>

    <style>
        .print 
        {
            background-color: transparent;
            border-radius: 5px;

            font-size: 60px;
            float: none;
            margin: 20px auto;
            display: block;
            text-align: center;
        
            text-align: center;
        }
        @media (max-width: 768px) 
        {
            .print {
                float: left;
                margin: 20px auto;
                display: block;
                text-align: center;
                font-size: 35px;
            }
            .home-content
            {
                background-color:#fff ;
            }
            .container-fluid
            {
                background-color: #fff;

            }
            
        }
    </style>
</head>
<body>
<?php 
require('./includes/header.php');

?>
<div class="container-fluid">
    <div class="row ms-5 mb-5">
 
        <div class="col-lg-11 col-12  p-0 ms-5 ">   
             
            <div class="home-content align-items-center ms-5 ">
           
            <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>

                <h2 class="mt-2" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">My Profile</h2>
                <hr>
                <?php
                    
                    if(isset($_SESSION["email"]))
                    {
                        $email = $_SESSION["email"];

                        $query = "select * from studentregistration where email_id='$email'";
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
                                ?>
                                <div class="print">
                                <a href="../report-generate/downloadprofile.php?regno=<?php echo $row['registration_no'] ?> &program_type=<?php echo $row['program_type'] ?> "> <i class='bx bxs-printer text-center'></i></a>
                            </div>
                            <?php

                                $roomno =$row['room_no'];

                                $regno =$row['registration_no'];

                                $sql="select * from rooms where room_no=$roomno";
                                $data=mysqli_query($con,$sql);

                                $sql1="select * from documents where regno=$regno";
                                $data1=mysqli_query($con,$sql1);

                            
                                ?>
                            <div class="col-md-12">


                                    <div class="panel panel-default">

                                    

                                        <div class="panel-body">

                                        <table id="zctb" class="table table-bordered table-responsive dataTable" cellspacing="0" width="100%" border="1">
                                                                                            
                                        <tbody>

                                            <tr>
                                            <td colspan="6" style="text-align:center; "><h3 style="color:blue;">Personal Information</h3></td>
                                            <tr>
                                                <tr>
                                                <td colspan="6"><?php echo "<img  style='border:3px solid black;height:150px;width:150px;float:right' src='" . $row['std_img'] . "' height='100px' width='100px'>" ?></td>
                                                </tr>
                                            </tr>

                                    
                                            <tr>
                                                <td colspan="6"><h4 style="color:red;">Personal Info</h4></td>
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
                                                <td colspan="6" ><h4 style="color:green">Academic Information</h4></td>
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
                                                <td colspan="6" ><h4 style="color:blue">Addresses</h4></td>
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


    
</body>
</html>
<?php require('./includes/footer.php')?>