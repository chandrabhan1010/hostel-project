<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="./images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <?php require('./includes/links.php')?>

    <title>Home</title>

    <style>
            .pop:hover{
            border-top-color:#3c8dbc !important ;
            transform: scale(1.03);
            transition: all 0.3s ;
        }
        .link
        {
            text-decoration: none;
            color: blue;

        }
        .link:hover
        {
            color:tomato;
        }
    </style>


</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

<?php require('./includes/header.php')?>

<!-- Slider -->
<div class="slider-wrapper owl-carousel owl-theme" id="hero-slider">
        <div class="slide1 custom-height bg-cover d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-2 my-3 text-white  text-uppercase fontsize">Online Hostel Record System</h1>
                        <h6 class="text-uppercase text-center text-white fontsize1">IGNTU AMARKANTAK</h6>
                        <div class="btn">
                            <a href="#" class="btn btn-brand">Get Started</a>
                        </div>
                    </div>
                </div>
             </div>
         </div>

         <div class="slide2 custom-height bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-2 my-3 text-white  text-uppercase fontsize">University Campus Main Gate</h1>
                        <h6 class="text-uppercase  text-white fontsize1">IGNTU AMARKANTAK</h6>
                        
                    </div>
                </div>
             </div>
         </div>

         <div class="slide3 custom-height bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-2 my-3 text-white  text-uppercase fontsize">Guru Govind Boy's Hostel</h1>
                        <h6 class="text-uppercase  text-white fontsize1">IGNTU AMARKANTAK</h6>
                        
                    </div>
                </div>
             </div>
         </div>

         <div class="slide4 custom-height bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-2 my-3 text-white  text-uppercase fontsize">IGNTU University Campus</h1>
                        <h6 class="text-uppercase  text-white fontsize1">IGNTU AMARKANTAK</h6>
                        
                    </div>
                </div>
             </div>
         </div>

         <div class="slide5 custom-height bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-2 my-3 text-white  text-uppercase fontsize">Guru Govind Boy's Hostel</h1>
                        <h6 class="text-uppercase  text-white fontsize1">IGNTU AMARKANTAK</h6>
                        
                    </div>
                </div>
             </div>
         </div>


    </div>



 <div class="wellc">
    
        <marquee direction="start" scrollamount="8">
            <span class="text-white" style="font-size: 20px;">
            <img src="./images/new1.gif" style="width: 40px;">
             Admission Open for new session 2025-26
            <img src="./images/new1.gif" style="width: 40px;">
            </span> 
        </marquee>
    
</div>

<!-- Recent Event -->
<div class="row ms-0 me-0">

    <div class="col-sm-4">
        <div class="card m-3 p-2 shadow  mt-5  mb-3 " style="max-width: 30rem;">
            <h2 class="card-header heading  text-white text-center" style="background:#3c8dbc;">Recent Event</h2>
            <div class="card-body  ">
                    <div class="card-text">
                            <marquee direction="up" scrollamount="7" style="height:340px">
                                    <ul>
                                        <li><i class="text-danger">01-April-2025 :</i> <b>Admission Open for new session 2025-26</b> <img src="./images/new1.gif" style="width: 40px;"></li>
                                        <li><i class="text-danger">01-April-2025 :</i><b>Admission Open for new session 2025-26</b><img src="./images/new1.gif" style="width: 40px;"></li>
                                        <li><i class="text-danger">01-April-2025 :</i><b>Admission Open for new session 2025-26</b> <img src="./images/new1.gif" style="width: 40px;"></li>
                                        <li><i class="text-danger">01-April-2025 :</i> <b>Admission Open for new session 2025-26</b> <img src="./images/new1.gif" style="width: 40px;"></li>
                                        <li><i class="text-danger">01-April-2025 :</i> <b>Admission Open for new session 2025-26</b> <img src="./images/new1.gif" style="width: 40px;"></li>
                                        <li><i class="text-danger">01-April-2025 :</i>  <b>Admission Open for new session 2025-26</b><img src="./images/new1.gif" style="width: 40px;"></li>
                                    </ul>
                            </marquee>
                    </div>
            </div>
        </div>



        <div class="card m-3 p-2 shadow mt-5  mb-3  " style="max-width: 30rem;">
            <h2 class="card-header heading  text-white text-center" style="background:#3c8dbc">Notice Board</h2>
        <?php

        include('includes/db_config.php');
        $query="select * from notice";
        $result=mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
            <div class="card-body  ">
                <img src="./images/new.gif" style="width: 50px;"><h5 class="card-title"><?php echo $row['title']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php $wop = $row['post_date']; print date("d M Y : ",strtotime($wop))?><?php echo $row['description']?></h6>
                <?php echo"<a href='".'HostelProject/'.$row['file']."'target='blank'  class='link' ><p>Click here for : ".$row['link_title']."</p></a>" ?>
            </div>
        <?php
            }
            ?>

        </div> 
    </div>

    <div class="col-sm-8">
         <div class="card    mt-5 m-3 p-2 shadow" style="max-width: 77rem; ">
            <h2 class="card-header heading text-white text-center" style="background:#3c8dbc">
            What's Happening @ Guru Govind Boys  Hostel for Boys <br>(Post Graduate & Under Graduate)
            </h2>
            <div class="card-body">
                    <div class="card-text">
                     <h4 class="text-center"><a href="#">Terms and condition for online fees payment</a></h4>
                     <h4 class="text-center"><a href="#">Bulletin of Information 2024-25</a></h4>
                     <h4 class="text-center"><a href="#">Online Fee Payment</a></h4>
                                        </div>
                    <div class="card-group">
                        <div class="card  m-3 p-2 shadow pop">
                            <img src="./images/no1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center text-white" style="background:#3c8dbc; font-size:20px;">Hostel Front View</h5>   
                            </div>
                        </div>

                        <div class="card m-3 p-2 shadow pop">
                            <img src="./images/innerview.png" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center text-white"style="background:#3c8dbc; font-size:20px;">Hostel Inner View</h5>
                            </div>
                        </div>

                        <div class="card m-3 p-2 shadow pop">
                            <img src="./images/mess.png" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center text-white" style="background:#3c8dbc; font-size:20px;">Hostel Mess</h5>

                            </div>
                        </div>
                    </div>
            </div>
            <!-- card circle code -->

            <div class="info-container">
                <div class="info-box pop">
                <div class="circle">248</div>
                <div class="label">ROOMS</div>
                </div>
                <div class="info-box pop">
                <div class="circle">3</div>
                <div class="label">FLOORS </div>
                </div>
                <div class="info-box pop">
                <div class="circle">500+</div>
                <div class="label">STUDENTS</div>
                </div>
                <div class="info-box pop">
                <div class="circle">1</div>
                <div class="label">MESS</div>
                </div>
            </div>

            <h2 class="text-center mt-5"><b>MORE @ GURU GOVIND BOYS HOSTEL</b></h2>
            <div class="card-text text-center text-dark" style="font-size:20px;font: weight 700;">
                <p><b>The <b style="color:  #ff4d29;">GURU GOVIND BOYS HOSTEL</b> is a hostel for under-graduate and post-graduate students. All seats are allotted to the students on the basis of Distance among the applicants form various disciplines. The hostel has a Reading rooms, TV Hall ,Hostel Mess, WiFi facility, CCTV Safety,Geyser facility and 24x7 Security Guard available. The hostel is manage and regulated by Indira Gandhi National Tribal University . There are hot plates in the pantries of the blocks and refrigerators in the hostel for the common use of residents.</b></p>
            </div>
            </div>
        </div> 
</div>
    
<!-- Information Brochure-->
 <h2 class="text-center mt-5" style="font-size: 40px;">Information Brochure</h2>
  <div class="underline"></div>

  <div class="container">

  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/reading.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">READING ROOM</h5></a>   
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/cycle.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">CYCLE CLUB</h5></a>   
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/common.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">COMMON ROOM</h5></a>   
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/play.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">PLAY GROUND</h5></a>   
    </div>
  </div>

  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/dining.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">DINNING HALL</h5></a>   
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/watercooler.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">WATER COOLER</h5></a>   
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/gym.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">MODERN GYM</h5></a>   
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
    <img src="./images/wifi.png" width="80px">
    <a href="infrastructure.php"><h5 class="mt-3 myhover">WIFI</h5></a>   
    </div>
  </div>
  </div>

  

 <div class="text-center mt-5 ">
 <a href="infrastructure.php" class="clickhere">Click here </a><span  style="font-size: 22px;">to see the Information Brochure.</span>
 </div>
<div class="underline"></div>


<!-- Meet The   Authorities -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 intro text-center">
                <h6>Meet Warden</h6>
                <h1>Meet The Authorities</h1>
                <div class="underline"></div>
                <P>For any queries or concerns related to hostel accommodation, students are encouraged to contact the Hostel Warden, who is available to assist with room allotments, rules, facilities, and student welfare.</P>
                </div>
            </div>
        </div>
    </section>


 <div class="team">
    <div class="container">
        <div class="row mt-5">

        <?php
            include('includes/db_config.php');
            $query="select * from hostel_warden";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
               <div class="col-lg-6  pop ">
                <div class="member d-flex align-items-start">
                    <div class="teampic">  
                    <img src="<?php echo 'hostelproject/' . $row['image']; ?>" class="img-circle shadow border team-img" alt="team1">
                    </div> 
                    <div class="member-info">
                        <h4><?php echo $row['warden_name']?></h4>
                        <span><?php echo $row['work']?></span>
                        <p><?php echo $row['department']?></p>
                        <i class='bx bxs-envelope mt-4'></i><a href="<?php echo $row['email']?>" class="ms-2 text-primary"><?php echo $row['email']?></a>
                        <br>
                        <i class='bx bxs-phone'></i><a href="tel:+91 7869171069" class="ms-2 text-dark"><?php echo $row['mobile']?></a>
                    </div>
                </div>
            </div>

            <?php
                }
                ?>
        </div>
    </div>
 </div>

<div class="text-center mt-5 ">
    <a href="./document/WardensList-Dec24.pdf" class="clickhere">Click here </a><span  style="font-size: 22px;">to see list of Hostel Authorities.</span>
    </div>
<div class="underline"></div>
 

<?php require('./includes/footer.php')?>


<script src="./js/jquery.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>
</html>