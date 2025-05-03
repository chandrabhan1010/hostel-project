<?php include('./includes/db_config.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <?php require('./includes/links.php') ?>

    <title>Download</title>
    <?php require('./includes/header.php') ?>

    <style>
        .print 
        {
            background-color: transparent;
            border-radius: 5px;

            font-size: 40px;
            float: none;
            margin: 20px auto;
            display: block;
            text-align: center;
        
            text-align: center;
        }
        .table
         {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }
        .table h4
        {
            font-size: 20px;
            color:blue;
        }
        .table h3
        {
            font-size: 20px;
            color:red;
        }
        .table th, .table td 
        {
            padding: 8px;
            text-align: left;
        }
        img {
        max-width: 100%;
        height: auto;
        }


        @media (max-width: 768px) 
        {
            .print {
                float: none;
                margin: 20px auto;
                display: block;
                text-align: center;
                font-size: 28px;
            }

            .container-fluid {
                padding: 0 10px;
            }

            .panel-body {
                overflow-x: auto;
            }

            .table {
                width: 100% !important;
                background-color: white !important; /* or transparent */
                position: relative;
                left: 0 !important;
            }

            .table th, .table td {
                font-size: 14px;
                padding: 10px;
                text-align: left;
                word-wrap: break-word;
            }

            .table th, .table td h3 {
                font-size: 18px;
            }

            .table img {
                background-color: transparent;
                width: 80px;
                height: 80px;
                object-fit: cover;
            }
        }


    </style>
</head>

<body>

<?php
error_reporting(0);
if(isset($_POST['download']))
{
    
    $enroll = $_POST['enroll'];
    $year = $_POST['year'];


    $sql ="SELECT * FROM paymentdetails WHERE enrollment='$enroll' AND pay_year='$year'";
    $data = mysqli_query($con,$sql);
    $total = mysqli_num_rows($data);

    if($total)
    {
        $query ="select * from paymentdetails where transaction_id='$transaction_id'";
        $result = mysqli_query($con,$query);
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
                        <a href="printfeereceipt.php?enroll=<?php echo $row['enrollment']?> & year=<?php echo $row['pay_year']?>"> <i class='bx bxs-printer text-center'></i></a>
                    </div>

                <div class="container mb-5 box" style="margin-top: 30px; width:100%;">
                
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        
                        <table class="table table-bordered rounded"border="1">

                                <tbody>

                                    <tr>
                                        <td colspan="6" style="text-align:center; color:blue">
                                            <h3>Online Hostel Fee Receipt</h3>
                                        </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    
                                   
                                    <tr>
                                        <td colspan="6" style="color:red">
                                            <h4>Personal Information Of Applicant</h4>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Enrollment Number :</b></td>
                                        <td><?php echo $row['enrollment'] ?></td>

                                        <td><b>Full Name :</b></td>
                                        <td><?php echo $row['name'] ?></td>

                                        <td><b>Email :</b></td>
                                        <td><?php echo $row['email'] ?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Father Name. :</b></td>
                                        <td><?php echo $row['fname'] ?></td>

                                        <td><b>Category :</b></td>
                                        <td><?php echo $row['category'] ?></td>


                                        <td><b>Date Of Birth :</b></td>
                                        <td><?php $wop = $row['dob']; print date("d-m-Y",strtotime($wop))?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Gender:</b></td>
                                        <td><?php echo $row['gender'] ?></td>

                                        <td><b>Course Type:</b></td>
                                        <td><?php echo $row['course_type'] ?></td>


                                        <td><b>Course  :</b></td>
                                        <td><?php echo $row['course_name'] ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Semester :</b></td>
                                        <td ><?php echo $row['semester'] ?></td>

                                        <td><b>Student Type :</b></td>
                                        <td><?php echo $row['student_type'] ?></td>


                                        <td><b>Physically Disabled Person ::</b></td>
                                        <td><?php echo $row['physical_disable'] ?></td>

                                    </tr>

                                    <tr>
                                    <td><b>Mobile Number  :</b></td>
                                    <td  colspan="6"><?php echo $row['mobile'] ?></td>

                                    </tr>

                                    <tr>
                                        <td colspan="6" style="color:blue">
                                            <h4>Addresses</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Address :</b></td>
                                        <td colspan="5"><?php echo $row['address']?></td>
                                    </tr>
                                    <tr>
                                        <td><b>City :</b></td>
                                        <td colspan="5"><?php echo $row['city']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>State :</b></td>
                                        <td colspan="5"><?php echo $row['state']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Zip-Code :</b></td>
                                        <td colspan="5"><?php echo $row['zipcode']?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="color:green">
                                            <h4>Fee Acknowlegement Receipt</h4>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Enrollment :</b></td>
                                        <td colspan="5"><?php echo $row['enrollment']?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Pay Year's  :</b></td>
                                        <td colspan="5"><?php echo $row['pay_year']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Fee Paid Status :</b></td>
                                        <td colspan="5"><?php echo $row['payment_status']?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Transaction Id :</b></td>
                                        <td colspan="5"><?php echo $row['transaction_id']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Fee Amount :</b></td>
                                        <td colspan="5"><?php echo $row['amount']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Date of Fee Paid :</b></td>
                                        <td colspan="5"><?php $wop = $row['pay_date']; print date("d-m-Y",strtotime($wop))?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                    </div>
<?php

                }
            }
        }
        else
        {
           echo "<hr>";
           echo "<h3 style='color:red;margin-left:850px'>Payment Fee Receipt Not Found</h3>";
        } 
    }
    else
    {
       echo "<hr>";
       echo "<h3 style='color:red;margin-left:850px'>Payment Fee Receipt Not Found</h3>";
    } 
        
    


?>

   
 

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>
<?php require('./includes/footer.php') ?>