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

            font-size: 60px;
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
    foreach($_POST as $key => $value)
    {
        $_POST[$key] = mysqli_real_escape_string($con,$value);
    }
        $regno =$_POST['regno'];

        $program =$_POST['program'];

        $fetch_src= FETCH_SRC;

        if($program == 'UG')
        { 
            $query = "SELECT * FROM ugregistration WHERE registration_no='$regno' && program_type='$program'";
            $data = mysqli_query($con, $query);
            $result = mysqli_num_rows($data);

            if($result)
            {
            $query = "SELECT * FROM ugregistration WHERE registration_no='$regno' && program_type='$program'";
            $data = mysqli_query($con, $query);

            if(!$data)
            {
                die("connection failed" . mysqli_error($con));
            }
            else
            {
                while ($row = mysqli_fetch_assoc($data)) 
                {
                ?>
                    <div class="print">
                        <a href="printapplication.php?cuetno=<?php echo $row['cuet_no'] ?> &program_type=<?php echo $row['program_type'] ?> "> <i class='bx bxs-printer text-center'></i></a>
                    </div>

                    <div class="container mb-5 box" style="margin-top: 100px; width:100%;">
                        <div class="panel panel-default">

                            <div class="panel-body">

                                <table class="table table-bordered rounded" border="1">

                                    <tbody>

                                        <tr>
                                            <td colspan="6" style="text-align:center;color:blue;">
                                                <h4>Registraion Details Of Applicant</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">

                                                <?php echo "<img  style='width:100px; float:right; ' src='" . $fetch_src.$row['std_img'] . "' height='100px' width='100px'>";
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Registration Number :</th>
                                            <td><?php echo $row['registration_no'] ?></td>

                                            <td><b>Cuet Number:</b></td>
                                            <td><?php echo $row['cuet_no']; ?></td>

                                            <th>Apply Date :</th>
                                            <td><?php $wop = $row['apply_date'];
                                                print date("d-m-Y", strtotime($wop)) ?></td>
                                        </tr>


                                        <tr>


                                            <td><b>Programme Type :</b></td>
                                            <td><?php echo $row['program_type'] ?></td>

                                            <td><b>Course :</b></td>
                                            <td colspan="3"><?php echo $row['course'] ?></td>

                                        </tr>

                                        <tr>
                                            <td colspan="6" style="color:red">
                                                <h3>Personal Info</h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>Application Number :</b></td>
                                            <td><?php echo $row['registration_no'] ?></td>

                                            <td><b>Full Name :</b></td>
                                            <td><?php echo $row['sname'] ?></td>

                                            <td><b>Email :</b></td>
                                            <td><?php echo $row['email_id'] ?></td>
                                        </tr>


                                        <tr>
                                            <td><b>Father Name. :</b></td>
                                            <td><?php echo $row['father_name'] ?></td>

                                            <td><b>Mother Name :</b></td>
                                            <td><?php echo $row['mother_name'] ?></td>

                                            <td><b>Date Of Birth :</b></td>
                                            <td><?php echo $row['date_of_birth'] ?></td>
                                        </tr>


                                        <tr>
                                            <td><b>Gender:</b></td>
                                            <td><?php echo $row['gender'] ?></td>

                                            <td><b>Category :</b></td>
                                            <td><?php echo $row['category'] ?></td>

                                            <td><b>Religion :</b></td>
                                            <td><?php echo $row['religion'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Contact No. :</b></td>
                                            <td colspan="2"><?php echo $row['phone_no'] ?></td>

                                            <td><b>Docoment :</b></td>
                                            <td colspan="4"><?php echo "<a style='text-decoration:none;color:red'; href='" .$fetch_src.$row['aadhar_pdf'] . "' target=''>view</a>" ?></td>
                                        </tr>

                                        <tr>
                                            <td colspan="6" style="color:blue">
                                                <h3>Addresses</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Address according to the ID Proof :</b></td>
                                            <td colspan="5"><?php echo $row['address'] ?></td>
                                        </tr>

                                        <tr>
                                            <td><b>State :</b></td>
                                            <td colspan="5"><?php echo $row['state'] ?></td>
                                        </tr>

                                        <tr>
                                            <td><b>Distance from Home Town to University Campus in KM :</b></td>
                                            <td colspan="5"><?php echo $row['distance'] ?> km</td>
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
                echo "<script>alert('Record Not Present');</script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/hostel_receipt.php?success=added" />
              <?php
            }

        }
        if($program == 'PG' || $program == 'DIPLOMA')
        { 
            $query = "SELECT * FROM pgregistration WHERE registration_no='$regno' && program_type='$program'";
            $data = mysqli_query($con, $query);
            $result = mysqli_num_rows($data);

            if($result)
            {
            $query = "SELECT * FROM pgregistration WHERE registration_no='$regno' && program_type='$program'";
            $data = mysqli_query($con, $query);

            if(!$data)
            {
                die("connection failed" . mysqli_error($con));
            }
            else
            {
                while ($row = mysqli_fetch_assoc($data)) 
                {
                ?>
                    <div class="print">
                        <a href="printapplication.php?cuetno=<?php echo $row['cuet_no'] ?> &program_type=<?php echo $row['program_type'] ?> "> <i class='bx bxs-printer text-center'></i></a>
                    </div>

                    <div class="container mb-5 box" style="margin-top: 100px; width:100%;">
                        <div class="panel panel-default">

                            <div class="panel-body">

                                <table class="table table-bordered rounded" border="1">

                                    <tbody>

                                        <tr>
                                            <td colspan="6" style="text-align:center;color:blue;">
                                                <h4>Registraion Details Of Applicant</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">

                                                <?php echo "<img  style='width:100px; float:right; ' src='" . $fetch_src.$row['std_img'] . "' height='100px' width='100px'>";
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Registration Number :</th>
                                            <td><?php echo $row['registration_no'] ?></td>

                                            <td><b>Cuet Number:</b></td>
                                            <td><?php echo $row['cuet_no']; ?></td>

                                            <th>Apply Date :</th>
                                            <td><?php $wop = $row['apply_date'];
                                                print date("d-m-Y", strtotime($wop)) ?></td>
                                        </tr>


                                        <tr>


                                            <td><b>Programme Type :</b></td>
                                            <td><?php echo $row['program_type'] ?></td>

                                            <td><b>Course :</b></td>
                                            <td colspan="3"><?php echo $row['course'] ?></td>

                                        </tr>

                                        <tr>
                                            <td colspan="6" style="color:red">
                                                <h3>Personal Info</h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>Application Number :</b></td>
                                            <td><?php echo $row['Registration_no'] ?></td>

                                            <td><b>Full Name :</b></td>
                                            <td><?php echo $row['sname'] ?></td>

                                            <td><b>Email :</b></td>
                                            <td><?php echo $row['email_id'] ?></td>
                                        </tr>


                                        <tr>
                                            <td><b>Father Name. :</b></td>
                                            <td><?php echo $row['father_name'] ?></td>

                                            <td><b>Mother Name :</b></td>
                                            <td><?php echo $row['mother_name'] ?></td>

                                            <td><b>Date Of Birth :</b></td>
                                            <td><?php echo $row['date_of_birth'] ?></td>
                                        </tr>


                                        <tr>
                                            <td><b>Gender:</b></td>
                                            <td><?php echo $row['gender'] ?></td>

                                            <td><b>Category :</b></td>
                                            <td><?php echo $row['category'] ?></td>

                                            <td><b>Religion :</b></td>
                                            <td><?php echo $row['religion'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Contact No. :</b></td>
                                            <td colspan="2"><?php echo $row['phone_no'] ?></td>

                                            <td><b>Docoment :</b></td>
                                            <td colspan="4"><?php echo "<a style='text-decoration:none;color:red'; href='" .$fetch_src.$row['aadhar_pdf'] . "' target=''>view</a>" ?></td>
                                        </tr>

                                        <tr>
                                            <td colspan="6" style="color:blue">
                                                <h3>Addresses</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Address according to the ID Proof :</b></td>
                                            <td colspan="5"><?php echo $row['address'] ?></td>
                                        </tr>

                                        <tr>
                                            <td><b>State :</b></td>
                                            <td colspan="5"><?php echo $row['state'] ?></td>
                                        </tr>

                                        <tr>
                                            <td><b>Distance from Home Town to University Campus in KM :</b></td>
                                            <td colspan="5"><?php echo $row['distance'] ?> km</td>
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
                echo "<script>alert('Record Not Present');</script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/hostel_receipt.php?success=added" />
              <?php
              
            }

        }

    }

    ?>

   
    <?php require('./includes/footer.php') ?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>