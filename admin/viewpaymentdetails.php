<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <?php require('./includes/links.php') ?>
    <title>Fee Details</title>
     
</head>
<body>
<?php require('./includes/header.php')?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">
                <h3 class="mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Student Fee Payment Details</h3>
                <hr>
                
                <?php
                require('includes/db_config.php');

                if(isset($_GET['enroll']) && isset($_GET['year']))
                {
                    
                    $enroll =$_GET['enroll'];
                    $year = $_GET['year'];

                
                    $sql ="select * from paymentdetails where enrollment='$enroll' && pay_year='$year'";
                    $data = mysqli_query($con,$sql);
                    $total = mysqli_num_rows($data);
                
                    if($total)
                    {
                        $query ="select * from paymentdetails where enrollment='$enroll' && pay_year='$year'";
                        $result = mysqli_query($con,$query);
                        if (!$result) 
                        {
                            die("connection failed" . mysqli_error($conn));
                        } 
                        else
                        {
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                                ?>
                                <div class="box">
                                
                                <div class="panel panel-default">
                                    
                                    <div class="panel-body">
                                        
                                        <table id="zctb" class="table table-bordered  dataTable" cellspacing="0" width="100%" border="1">
                
                
                                                <tbody>
                
                                                    <tr>
                                                        <td colspan="6">
                                                            <h3  style="text-align:center; color:blue">Online Hostel Fee Receipt</h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                
                                                    </tr>
                                                    
                                                    
                                                    <tr>
                                                        <td colspan="6" >
                                                            <h4 style="color:red">Personal Information Of Applicant</h4>
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
                                                        <td colspan="6" >
                                                            <h4 style="color:#000080">Addresses</h4>
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
                                                        <td colspan="6" >
                                                            <h4 style="color:green">Fee Acknowlegement Receipt</h4>
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
                

                </div>   
            </div> 
        </div> 
    </div> 
</div> 
</body>
</html>


<?php require('./includes/footer.php')?>




    