<?php require('./includes/header.php');?>

 <!-- home content -->
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
            <div class="home-content">
               <div class="overview-boxes">
                  <div class="box">
                     <div class="left-side">
                        <div class="box_topic text-success">View Profile</div>
                     
                        <div class="indicator">
                        <i class='bx bx-right-arrow-alt'></i>
                        <span class="text"><a href="student_profile.php">View all details</a></span>
                        </div>
                     </div>
                     <i class='bx bxs-user-detail cart' ></i>
                  </div>
                  <div class="box">
                     <div class="left-side">
                        <div class="box_topic text-success">Id Card</div>
                        
                        <div class="indicator">
                        <i class='bx bx-right-arrow-alt'></i>
                        <span class="text"><a href="../report-generate/viewidcard.php?enrollno=<?php echo $row['enrollment']?>">View all details</a></span>
                        </div>
                     </div>
                     <i class='bx bxs-id-card cart' ></i>
                  </div>

                  <div class="box">
                     <div class="left-side">
                        <div class="box_topic text-success">Update Profile</div>
                        
                        <div class="indicator">
                        <i class='bx bx-right-arrow-alt'></i>
                        <span class="text"><a href="update.php?id=<?php echo $row['email_id']?>"> View all details</a> </span>
                        </div>
                     </div>
                     <i class='bx bxs-select-multiple cart' ></i>
                  </div>
            
                  <div class="box">
                     <div class="left-side">
                        <div class="box_topic text-success">Change Password</div>
                        
                        <div class="indicator">
                        <i class='bx bx-right-arrow-alt'></i>
                        <span class="text"><a href="change_pass.php?id=<?php echo $row['email_id']?>">View all details</a></span>
                        </div>
                     </div>
                     <i class='bx bxs-lock cart'></i>
                  </div> 
               </div>
            </div>
      <?php
}
}
 }
?>
 </div>
<?php require('./includes/footer.php')?>
