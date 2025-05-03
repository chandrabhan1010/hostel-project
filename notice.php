<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="./images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <?php require('./includes/links.php')?>

    <title>Notice Board</title>
    <?php require('./includes/header.php')?>

    <style>
        .link
        {
            text-decoration: none;
            color: blue;

        }
        .link:hover
        {
            color:tomato;
        }
        .circle1
        {
            background-color:#3c8dbc ;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 1px solid;
            position: relative;
            top: 50px;
        }
        .circle1 p
        {
            color: white;
            position: relative;
            left: 12px;
            bottom: 1px;
            
        }
        .circle1 p span
        {
            color: white;
            position: relative;
            bottom: 10px; 
        }

        h4
        {
            margin-left:60px;
            position: relative;
            top: 20px;
        }
        h6
        {
            margin-top: 30px;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

<div class="col-sm-8 align-self-center mx-auto mt-5">
    <div class="card  mt-5 m-3 p-2 shadow">
        <h2 class="card-header heading text-white text-center" style="background:#3c8dbc">
        NOTICE BOARD
        </h2>
        <div class="linkform mt-5">

        <h3>&nbsp;Hostel : Offline Application Form (Only for Old (existing) students)<a href="./document/HostelApplicationJuly17.pdf" target="_blank" class="link">Click Here </a></h3> 

        <h3>&nbsp;Hostel : Offline Application Form (Only for New students)<a href="./document/HostelAdmFormNewStu.pdf" target="_blank" class="link">Click Here </a></h3>
        </div>

      <div class="circle1">
        <p >15 <span>Nov</span></p>      
 
      </div>
      <h4 style="color:black"> List of provisionally eligible students for the Hostels<img src="./images/new1.gif" style="width: 40px;"></h4>
       
        <h6 style="color:silver">15 Nov 2024 : List of provisionally eligible students for the Hostels</h6>
        <a href='./document/GGBH-HostelAdmList-July23.pdf' class='link' ><p>Click here for : List of provisionally eligible students</p></a>
        

        <div class="circle1">
        <p >23 <span>Nov</span></p>        
 
      </div>
      <h4 style="color:black">GGBH Hostel New Student allotement list 2024<img src="./images/new1.gif" style="width: 40px;"></h4>
       
        <h6 style="color:silver">23 Nov 2024 : List of provisionally eligible students for the Hostels</h6>
        <a href='./document/GGBH-HostelAdmList-July23.pdf' class='link' ><p>Click here for : List of provisionally eligible students</p></a>
    </div>
</div>
<?php require('./includes/footer.php')?>

<script src="./js/jquery.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>
</html>