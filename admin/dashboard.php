<?php require('./includes/header.php')?>


 <!-- home content -->
<div class="home-content">
    <div class="overview-boxes">
      <?php
      require('db_config.php');

      $sql = "SELECT * FROM studentregistration ";

      $result = mysqli_query($con,$sql);
      $total = mysqli_num_rows($result);
      ?>

        <div class="box">
           <div class="left-side">
            <div class="box_topic">Total Student</div>
            <div class="number"><?php echo $total?></div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text"><a href="manage_student.php">View all deta</a> </span>
            </div>
           </div>
           <i class='bx bxs-user-detail cart' ></i>
        </div>                
        
        <?php   
    ?>

<?php
      require('db_config.php');

      $sql = "SELECT * FROM studentregistration WHERE program_type='PG'";

      $result = mysqli_query($con,$sql);
      $total = mysqli_num_rows($result);

      ?>
           <div class="box">
           <div class="left-side">
            <div class="box_topic">PG Student</div>
            <div class="number"><?php echo $total?></div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text"><a href="pgstudent.php?program=<?php echo 'PG'?>">View all deta</a></span>
            </div>
           </div>
           <i class='bx bxs-group cart'></i>
        </div>             

        <?php      
    ?>
    
    <?php
  
      $sql = "SELECT * FROM studentregistration WHERE program_type='UG'";

      $result = mysqli_query($con,$sql);
      $total = mysqli_num_rows($result);
      ?>
           
        <div class="box">
           <div class="left-side">
            <div class="box_topic">UG Student</div>
            <div class="number"><?php echo $total?></div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text"><a href="ugstudent.php?program=<?php echo 'UG'?>">View all details</a></span>
            </div>
           </div>
           <i class='bx bxs-group cart'></i>
        </div>  
     
        
        <?php      
    ?>
       

       <?php
      require('db_config.php');

      $sql = "SELECT * FROM rooms";

      $result = mysqli_query($con,$sql);
      $total = mysqli_num_rows($result);
      ?>
           
           <div class="box">
           <div class="left-side">
            <div class="box_topic">Total Rooms</div>
            <div class="number"><?php echo $total?></div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text"><a href="manage_room.php">View all details</a></span>
            </div>
           </div>
           <i class='bx bxs-building-house cart' ></i>
        </div>       
        
        <?php      
    ?>

    
<?php
      require('db_config.php');

      $sql = "SELECT * FROM rooms where allot_status='Yes'";

      $result = mysqli_query($con,$sql);
      $total = mysqli_num_rows($result);
      ?>
           
           <div class="box">
           <div class="left-side">
            <div class="box_topic">Alloted Rooms</div>
            <div class="number"><?php echo $total ?></div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text"><a href="allot_room.php?status=<?php echo 'Yes'?>">View all details</a></span>
            </div>
           </div>
           <i class='bx bxs-bed cart' ></i>
        </div>     
        
        <?php      
    ?>
    
    <?php
      require('db_config.php');

      $sql = "SELECT * FROM rooms where allot_status='No'";

      $result = mysqli_query($con,$sql);
      $total = mysqli_num_rows($result);
      ?>
           
           <div class="box">
           <div class="left-side">
            <div class="box_topic">Empty Rooms</div>
            <div class="number"><?php echo $total ?></div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text"><a href="empty_room.php?status=<?php echo 'No'?>">View all details</a></span>
            </div>
           </div>
           <i class='bx bx-bed cart' ></i>
        </div>
        
        <?php      
    ?>
    

        

        </div>
</div>

    
<?php require('./includes/footer.php')?>
