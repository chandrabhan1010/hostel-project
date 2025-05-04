<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/room_register.css">
    <title>Update Details</title>
</head>
<body>
<?php require('./includes/header.php')?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 p-4 overflow-hidden ">
            <!-- design Form -->
            <div class="home-section">     
               <div class="home-content">

               <a href="dashboard.php"><i class='bx bx-arrow-back' style="font-size:40px"></i></a>
                <h2 class="mt-2" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Update Profile Details</h2>
                <hr>
                 <div class="container1">
                 <?php

                    $query="select * from studentregistration where email_id='$email'";
                    $data=mysqli_query($con,$query);
                    $total=mysqli_num_rows($data);
                    $result=mysqli_fetch_assoc($data);
                 ?>
                <div class="title" style="color:red">
                    Update Profile
                </div>
                <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="form">

                        <div class="para">
                            Personal info
                        </div>

                        <div class="input-field">
                        <label>Registration no.</label>
                        <input type="text"  name="regno" value="<?php echo $result['registration_no'];?>" readonly="true" required>
                        </div>

                        <div class="input-field">
                        <label>Enrollment no.</label>
                        <input type="number" name="enroll" value="<?php echo $result['enrollment'];?>" required>
                        </div>

                        <div class="input-field">
                        <label>Student Name</label>
                        <input type="text"  name="sname" value="<?php echo $result['name'];?>"  required>   
                        </div>
                        <div class="input-field">
                        <label>Father Name</label>
                        <input type="text"  name="fname" value="<?php echo $result['fname'];?>"  required>   
                        </div>

                        

                        <div class="input-field">
                        <label>Date Of Birth</label>
                        <input type="date"  name="dob" value="<?php echo $result['dob'];?>" required>   
                        </div>

                    
                        <div class="input-field">
                        <label>Email Id</label>
                        <input type="email"  name="email" value="<?php echo $result['email_id'];?>" readonly="true" required>   
                        </div>

                        <div class="input-field">
                        <label>Mobile No.</label>
                        <input type="number" name="phone" value="<?php echo $result['contact_no'];?>" required>  
                        </div>

                        <div class="para">
                        Address
                        </div>
                        <div class="input-field">
                        <label>Address according to the ID Proof</label>
                        <textarea class ="textarea" name="address" required> <?php echo $result['address'];?></textarea>   
                        </div>
                        
                        <div class="input-field">
                        <label>City :</label>
                        <input type="text" name="city" value="<?php echo $result['city'];?> "  required>  
                        </div>

                        <div class="input-field">
                        <label>State</label>
                    <select class="selectbox" name="state" value="<?php echo $result['state'];?> "  required>
                        <option value="">Select State</option>
                        <option value="Andhra Pradesh"
                        <?php
                            if($result['state']=='Andhra Pradesh')
                            {
                                echo "selected";
                            }
                        ?>
                        >Andhra Pradesh</option>
                        <option value="Arunachal Pradesh"
                        <?php
                            if($result['state']=='Arunachal Pradesh')
                            {
                                echo "selected";
                            }
                        ?>
                        >Arunachal Pradesh</option>
                        <option value="Assam"
                        <?php
                            if($result['state']=='Assam')
                            {
                                echo "selected";
                            }
                        ?>
                        >Assam</option>
                        <option value="Bihar"
                        <?php
                            if($result['state']=='Bihar')
                            {
                                echo "selected";
                            }
                        ?>
                        >Bihar</option>
                        <option value="Chhattisgarh"
                        <?php
                            if($result['state']=='Chhattisgarh')
                            {
                                echo "selected";
                            }
                        ?>
                        >Chhattisgarh</option>
                        <option value="Goa"
                        <?php
                            if($result['state']=='Goa')
                            {
                                echo "selected";
                            }
                        ?>
                        >Goa</option>
                        <option value="Gujrat"
                        <?php
                            if($result['state']=='Gujrat')
                            {
                                echo "selected";
                            }
                        ?>
                        >Gujrat</option>
                        <option value="Hariyana"
                        <?php
                            if($result['state']=='Hariyana')
                            {
                                echo "selected";
                            }
                        ?>
                        >Hariyana</option>
                        <option value="Himachal Pradesh
                        <?php
                            if($result['state']=='Himachal Pradesh')
                            {
                                echo "selected";
                            }
                        ?>
                        ">Himachal Pradesh</option>
                        <option value="Jharkhand"
                        <?php
                            if($result['state']=='Jharkhand')
                            {
                                echo "selected";
                            }
                        ?>
                        >Jharkhand</option>
                        <option value="Karnataka"
                        <?php
                            if($result['state']=='Karnataka')
                            {
                                echo "selected";
                            }
                        ?>
                        >Karnataka</option>
                        <option value="Kerala"
                        <?php
                            if($result['state']=='Kerala')
                            {
                                echo "selected";
                            }
                        ?>
                        >Kerala</option>
                        <option value="Madhya Pradesh"
                        <?php
                            if($result['state']=='Madhya Pradesh')
                            {
                                echo "selected";
                            }
                        ?>
                        >Madhya pradesh</option>
                        <option value="Maharashtra"
                        <?php
                            if($result['state']=='Maharashtra')
                            {
                                echo "selected";
                            }
                        ?>
                        >Maharashtra</option>
                        <option value="Manipur"
                        <?php
                            if($result['state']=='Manipur')
                            {
                                echo "selected";
                            }
                        ?>
                        >Manipur</option>
                        <option value="Meghalaya"
                        <?php
                            if($result['state']=='Megalaya')
                            {
                                echo "selected";
                            }
                        ?>
                        >Meghalaya</option>
                        <option value="Mizoram"
                        <?php
                            if($result['state']=='Mizoram')
                            {
                                echo "selected";
                            }
                        ?>
                        >Mizoram</option>
                        <option value="Nagaland"
                        <?php
                            if($result['state']=='Nagaland')
                            {
                                echo "selected";
                            }
                        ?>
                        >Nagaland</option>
                        <option value="Odisha"
                        <?php
                            if($result['state']=='Odisha')
                            {
                                echo "selected";
                            }
                        ?>
                        >Odisha</option>
                        <option value="Punjab"
                        <?php
                            if($result['state']=='Punjab')
                            {
                                echo "selected";
                            }
                        ?>
                        >Punjab</option>
                        <option value="Rajasthan"
                        <?php
                            if($result['state']=='Rajasthan')
                            {
                                echo "selected";
                            }
                        ?>
                        >Rajasthan</option>
                        <option value="Sikkim"
                        <?php
                            if($result['state']=='Sikkim')
                            {
                                echo "selected";
                            }
                        ?>
                        >Sikkim</option>
                        <option value="Tamil Nadu"
                        <?php
                            if($result['state']=='Tamil Nadu')
                            {
                                echo "selected";
                            }
                        ?>
                        >Tamil Nadu</option>
                        <option value="Telangana"
                        <?php
                            if($result['state']=='Telangana')
                            {
                                echo "selected";
                            }
                        ?>
                        >Telangana</option>
                        <option value="Uttar Pradesh"
                        <?php
                            if($result['state']=='Uttar Pradesh')
                            {
                                echo "selected";
                            }
                        ?>
                        >Uttar Pradesh</option>
                        <option value="Uttarakhand"
                        <?php
                            if($result['state']=='Uttarankhand')
                            {
                                echo "selected";
                            }
                        ?>
                        >Uttarakhand</option>
                        <option value="West Bengal"
                        <?php
                            if($result['state']=='West Bengal')
                            {
                                echo "selected";
                            }
                        ?>
                        >Wesh Bengal</option>

                    </select>   
                        </div>

                        <div class="input-field">
                        <label>Pincode :</label>
                        <input type="number" name="pincode" value="<?php echo $result['pincode'];?>" required>  
                        </div>

                        <div class="input-field">
                        <label>distance :</label>
                        <input type="number" name="distance" value="<?php echo $result['distance'];?>"  required>  
                        </div>

                        <div class="input-field">
                        <label class="check">
                        <input type="checkbox" required >
                        </label>
                        <p>Please check  the details before Updation</p>  
                        </div>

                        <div class="input-field">
                    
                        <button type="submit" class ="btn" name="submit">Update</button>
                        </div>
                    </div>
                </form>         
</div>
</body>
</html>
<?php
require('includes/db_config.php');

if(isset($_POST['submit']))
{
   
    $regno =$_POST['regno'];
    $enroll =$_POST['enroll'];
    $sname =$_POST['sname'];
    $fname =$_POST['fname'];
    $dob =$_POST['dob'];
    $email =$_POST['email'];
    $mob =$_POST['phone'];

    
    $address =$_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $pincode =$_POST['pincode'];
    $distance =$_POST['distance'];

        // student registration
        $query1="UPDATE studentregistration set name='$sname',fname='$fname',dob='$dob',contact_no='$mob',email_id='$email',address='$address',city='$city',state='$state',pincode='$pincode',distance='$distance',enrollment='$enroll' where registration_no='$regno'";

        $result1=mysqli_query($con,$query1);

        
        // update user details
        $query2="UPDATE user_cred set sname='$sname' where user_email='$email'";
    
        $result2=mysqli_query($con,$query2);


  
        if($result1==1 && $result2==1)
        {
            echo "<script>alert('Profile Updated Successfully');</script>";             ?>
          <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/HostelProject/user/dashboard.php" />
             <?php 
                  
        }
            else
            {
                echo "<script>alert('Profile Not Update');</script>";
            }
    }


?>
</div>
        </div>
    </div>
</div>
</div>
    </div>
</div>
                

</body>
</html>
<?php require('./includes/footer.php')?>




    