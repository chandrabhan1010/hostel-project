<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="./images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('./includes/links.php')?>

    <title>About us</title>
    <?php require('./includes/header.php')?>
    <style>
        .pop:hover{
            border-top-color:#3c8dbc !important ;
            transform: scale(1.03);
            transition: all 0.3s ;
        }
    </style>

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">


<div class="col-sm-8 align-self-center mx-auto mt-5">
<div class="card  mt-5 m-3 p-2 shadow">
<h2 class="card-header heading text-white text-center" style="background:#3c8dbc">
About  Guru Govind Boys  Hostel
</h2>
<!-- image slider -->
<div class="container px-4 mt-5">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5 ">
      <div class="swiper-slide bg-white overflow-hidden rounded shadow">
        <img src="./images/no1.jpg" style="width: 100%; height:295px" alt="">
      </div>
      <div class="swiper-slide bg-white overflow-hidden rounded shadow">
        <img src="./images/no2.jpg" style="width: 100%; height:295px" alt="">
      </div>
      <div class="swiper-slide bg-white overflow-hidden rounded shadow">
        <img src="./images/no3.jpg" style="width: 100%;height:295px" alt="">
      </div>
      <div class="swiper-slide bg-white overflow-hidden rounded shadow">
        <img src="./images/no4.jpg" style="width: 100%;height:295px" alt="">
      </div>
      <div class="swiper-slide bg-white overflow-hidden rounded shadow">
        <img src="./images/no5.jpg" style="width: 100%;height:295px" alt="">
      </div>
      <div class="swiper-slide bg-white overflow-hidden rounded shadow">
        <img src="./images/no6.jpg" style="width: 100%;height:295px" alt="">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        slidesPerView: 3,
        spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
            slidesPerView:1,
            
        },
        640:{
            slidesPerView:2,
         
        },
        768:{
            slidesPerView:3,
          
        },
        1024:{
            slidesPerView:3,
          
        }
      }
    });
  </script>
</div>

<div class="card-body">
        <div class="card-group">
            <div class="card  m-3 p-2 shadow pop">
                <img src="./images/no1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center text-white " style="background:#3c8dbc">Hostel Front View</h5>   
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
    <div class="info-box">
    <div class="circle">248</div>
    <div class="label">ROOMS</div>
    </div>
    <div class="info-box">
    <div class="circle">3</div>
    <div class="label">FLOORS </div>
    </div>
    <div class="info-box">
    <div class="circle">500+</div>
    <div class="label">STUDENTS</div>
    </div>
    <div class="info-box">
    <div class="circle">1</div>
    <div class="label">MESS</div>
    </div>
</div>

<h2 class="text-center mt-5"><b>MORE @ GURU GOVIND BOYS HOSTEL</b></h2>
<div class="underline"></div>
<div class="card-text text-dark " style="font-size: 20px;">
    <p><b>The <b style="color:#2ba2ca;">GURU GOVIND BOYS HOSTEL</b> is a hostel for under-graduate and post-graduate students. All seats are allotted to the students on the basis of Distance among the applicants form various disciplines. The hostel has a Reading rooms, TV Hall ,Hostel Mess, WiFi facility, CCTV Safety,Geyser facility and 24x7 Security Guard available. The hostel is manage and regulated by Indira Gandhi National Tribal University . There are hot plates in the pantries of the blocks and refrigerators in the hostel for the common use of residents.</b></p>
</div>
  

<div class="my-5 px-4">
<h2 class="fw-bold text-center" style="font-family: Barlow,sans-serif;">HOSTEL AUTHORITIES</h2>
<div class="underline"></div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h4>Administrative Warden (GGBH)</h4>
        <h5>Dr. Naresh Kumar Sonkar</h5>
        <h6>Associate Professor (Department of Sociology & Social Anthropology)</h6>
        <i class='bx bxs-envelope mt-4'></i><a href="mailto:naresh.sonkar@igntu.ac.in" class="ms-2 text-primary">naresh.sonkar@igntu.ac.in</a>
        <br>
        <i class='bx bxs-phone'></i><a class="ms-2 text-dark">+91 9424127462</a>
        </div>
        <div class="col-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="./images/naresh_sonkar.jpg"  style="width: 200px; height:200px;">
        </div>
    </div>
    
    <hr>
    <br>

    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h4>Chief Warden (GGBH)</h4>
        <h5>Prof. Naveen Kumar Sharma</h5>
        <h6>Professor & Head (Department Of <br> Botany)</h6>
        <i class='bx bxs-envelope mt-4'></i><a href="mailto:naveen.sharma@igntu.ac.in" class="ms-2 text-primary">naveen.sharma@igntu.ac.in</a>
        <br>
        <i class='bx bxs-phone'></i><a class="ms-2 text-dark">+91 9406215277</a>
        </div>
        <div class="col-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="./images/nk_sharma.jpg"  style="width: 200px; height:200px;">
        </div>
    </div>
    
    <hr>
    <br>

    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h4>Warden (GGBH)</h4>
        <h5>Dr. Sudesh Kumar </h5>
        <h6>Assistant Professor (Department Of Computer Science)</h6>
        <i class='bx bxs-envelope mt-4'></i><a href="mailto:sudesh.kumar@igntu.ac.in" class="ms-2 text-primary">sudesh.kumar@igntu.ac.in</a>
        <br>
        <i class='bx bxs-phone'></i><a class="ms-2 text-dark">+91 7869171069</a>
        </div>
        <div class="col-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="./images/sudesh_kumar.jpg"  style="width: 200px; height:200px;">
        </div>
    </div>
    
    <hr>
    <br>

    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h4>Warden (GGBH)</h4>
        <h5>Dr. Shivaji Chaudhary</h5>
        <h6>Professor & Head (Department Of Environmental Science)</h6>
        <i class='bx bxs-envelope mt-4'></i><a href="mailto:shivaji.chaudhari@igntu.ac.in" class="ms-2 text-primary">shivaji.chaudhari@igntu.ac.in</a>
        <br>
        <i class='bx bxs-phone'></i><a class="ms-2 text-dark" >+91 9436093471</a>
        </div>
        <div class="col-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="./images/shivaji.jpg"  style="width: 200px; height:200px;">
        </div>
    </div>
    <hr>
    <br>
</div>
</div>

<div class="my-5 px-4">
<h2 class="fw-bold text-center" style="font-family: Barlow,sans-serif;">ANTI-RAGGING COMMITTEE</h2>
<div class="underline"></div>
</div>

<div class=" col-lg-12  col-md-6 ">
        <table class="table table-bordered text-center table-responsive ">
        <thead class="text-white" style="background:#2ba2ca;">
            <tr>
            <th colspan="3">Anti Ragging Cell</th>
            </tr>
        </thead>
        <tbody>
        <tr rowspan="2">
                <td>Prof. Krishna Singh <br>(Chairman)</td>    
                <td>Mob. 8989986746
                    <br>
                    Email: <a href="mailto:drkrishna.igntu@gmail.com">drkrishna.igntu@gmail.com</a>
                </td>  
            </tr>   
                <tr aria-rowspan="2">
                <td>Dr. A.P Singh<br>(Member)</td>    
                <td>Mob. 8959492646
                    <br>
                    Email: <a href="mailto:amar205.igntu@gmail.com">amar205.igntu@gmail.com</a>
                </td>  
            </tr>  

            <tr aria-rowspan="2">
                <td>Dr. Niti Jain<br>(Member)</td>    
                <td>Mob. 8989986754
                    <br>
                    Email: <a href="mailto:drnitijain.igntu@gmail.com">dr.igntunitijain@gmail.com</a>
                </td>  
            </tr>  
            <tr aria-rowspan="2">
                <td>Dr. Anupam Sharma <br>(Member)</td>    
                <td>Mob. 8989986746
                    <br>
                    Email: <a href="mailto:anupam.vishvesh.igntu@gmail.com">anupam.vishvesh.igntu@gmail.com</a>
                </td>  
            </tr> 

            <tr aria-rowspan="2">
                <td>Deputy Registrar <br>([Admin.] Member)</td>    
                <td>Mob. 8989986746
                    <br>
                    Email: <a href="mailto:dr.igntu@gmail.com">dr.igntu@gmail.com</a>
                </td>  
            </tr>  
            <tr aria-rowspan="2">
                <td>Dr. Rakesh Soni <br>(Member)</td>    
                <td>Mob. 8989986746
                    <br>
                    Email: <a href="mailto:rakesh.philaphy.igntu@gmail.com">rakesh.philaphy.igntu@gmail.com</a>
                </td>  
            </tr> 

            <tr aria-rowspan="2">
                <td>Dr. Harit Kumar Meen <br>(Member)</td>    
                <td>Mob. 8989986746
                    <br>
                    Email: <a href="mailto:harit.igntu@gmail.com">harit.igntu@gmail.com</a>
                </td>  
            </tr>  
            <tr aria-rowspan="2">
                <td>Dean, Students Welfare <br>(Convener)</td>    
                <td>Mob. 8989986746
                    <br>
                    Email: <a href="mailto:Khemsingh.daheriay@yahoo.com">Khemsingh.daheriay@yahoo.com</a>
                </td>  
            </tr> 

        </tbody>
        </table>
    </div>



<h2 class="fw-bold text-center" style="font-family: Barlow,sans-serif;">EMERGENCY HEALTH NUMBER</h2>
<div class="underline"></div>
    <div class="col-lg-12 col-md-6 mb-5 ">
        <table class="table table-bordered  text-center">
        <thead class="text-white" style="background:#3c8dbc;">
            <tr>
                <th>Destination</th>
                <th>Name</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Medical Officer</td>    
                <td>Dr. Saraswati</td>    
                <td>9752339988</td> 
            </tr>   
            <tr>
                <td>Nurse</td>    
                <td>Ms. Sabita Sahoo</td>    
                <td>9977024102, <br>9407047226</td> 
            </tr> 
            <tr>
                <td>Dresser</td>    
                <td>Mr. Atul Pandey</td>    
                <td>9179549561</td> 
            </tr> 

            <tr>
                <td>Vehicle Incharge for <br>Ambulance Service</td>    
                <td>Mr. Atul Pandey</td>    
                <td>8349509101, <br>9981695201</td> 
            </tr> 

        </tbody>
        </table>
    </div>

</div>
</div>
</div> 


<?php require('./includes/footer.php')?>

<script src="./js/jquery.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>
</html>