<?php
require('./includes/essentials.php');
adminLogin();
session_regenerate_id(true);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/adminpanel.css">

    <title>Admin Panel - dashboard</title>
    <?php require('./includes/links.php');?>
</head>
<body class="bg-light">
<!-- 
   <div class="container-fluid bg-dark text-light  p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-light">ADMIN PANEL</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>


     <div class="col-lg-2 bg-dark border-top border-3 border-secondary">
        
     </div> -->
     
<div class="sidebar">
    <div class="logo-details">
        <img src="./img/admin_icon.png">
        <span class="logo_name">Admin Panel</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#" >
            <i class='bx bx-grid-alt togle'  ></i>
            <span class="link_name">Dashboard</span> 
            </a>
        </li>
        <li>
            <a href="#">
            <i class="bi bi-person-vcard-fill"></i>
            <span class="link_name">Students Register</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class='bx bxs-building-house'></i>
            <span class="link_name">Manage Rooms</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class="bi bi-people-fill"></i>
            <span class="link_name">Manage Student</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class="bi bi-person-vcard"></i>
                    <span class="link_name">Manage Id Card</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class="bi bi-people-fill"></i>
            <span class="link_name">Show User</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class='bx bx-rupee'></i>
            <span class="link_name">Fee Details</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class="bi bi-clipboard2-data"></i>
            <span class="link_name">Notice Board</span> 
            </a>
        </li>

        <li class="complaints-dropdown">
            <a href="#" onclick="toggleDropdown(event)">
                <i class="bi bi-card-checklist"></i>
                <span class="link_name">Complaints</span>
                <i class="bx bx-chevron-down arrow"></i> 
            </a>
            <!-- Dropdown submenu -->
            <ul class="sub-menu">
                <li><a href="#">New </a></li>
                <li><a href="#">In Progress</a></li>
                <li><a href="#">Close</a></li>
                <li><a href="#">All</a></li>
            </ul>
        </li>

        <li class="complaints-dropdown">
            <a href="#" onclick="toggleDropdown(event)">
            <i class="bi bi-newspaper"></i>
                <span class="link_name">Applications</span> 
            <i class="bx bx-chevron-down arrow"></i> 
            </a>
            <!-- Dropdown submenu -->
            <ul class="sub-menu">
                <li><a href="#">UG</a></li>
                <li><a href="#">PG</a></li>
                <li><a href="#">Alloted</a></li>
            </ul>
        </li>
   


    </ul>
</div>

<!-- home section -->
 <section class="home-section">
 <nav>
    <div class="sidebar-button">
    <i class='bx bx-menu sidebarBtn'></i>
    <span class="dashboard">Dashboard</span>
    </div>


    <div class="profile-details">
        <!-- <img src="./img/Admin-Profile.png" alt=""> -->
         <!-- <span class="admin_name">Shiv kumar</span> -->

         <div class="dropdown">
         <img src="./img/Admin-Profile.png" alt="">
            <a class="btn  dropdown-toggle shadow-none admin_name" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Admin_Name
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Update Profile</a></li>
                <li><a class="dropdown-item" href="#">Change Password</a></li>
                <a class="dropdown-item" href="logout.php"><span>Logout</span><i class='bx bx-log-in'></i></a>
            </ul>
        </div>
    </div>
 </nav>

 <!-- home content -->
  <div class="home-content">
    <div class="overview-boxes">
        <div class="box">
           <div class="left-side">
            <div class="box_topic">Total Student</div>
            <div class="number">500</div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View all deta</span>
            </div>
           </div>
           <i class='bx bxs-user-detail cart' ></i>
        </div>
        <div class="box">
           <div class="left-side">
            <div class="box_topic">PG Student</div>
            <div class="number">120</div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text"> View all details</span>
            </div>
           </div>
           <i class='bx bxs-group cart'></i>
        </div>

        <div class="box">
           <div class="left-side">
            <div class="box_topic">UG Student</div>
            <div class="number">280</div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View all details</span>
            </div>
           </div>
           <i class='bx bxs-group cart'></i>
        </div>
 
        <div class="box">
           <div class="left-side">
            <div class="box_topic">Total Rooms</div>
            <div class="number">248</div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View all details</span>
            </div>
           </div>
           <i class='bx bxs-building-house cart' ></i>
        </div>

        <div class="box">
           <div class="left-side">
            <div class="box_topic">Alloted Rooms</div>
            <div class="number">200</div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View all details</span>
            </div>
           </div>
           <i class='bx bxs-bed cart' ></i>
        </div>
        <div class="box">
           <div class="left-side">
            <div class="box_topic">Empty Rooms</div>
            <div class="number">48</div>
            <div class="indicator">
            <i class='bx bx-right-arrow-alt'></i>
            <span class="text">View all details</span>
            </div>
           </div>
           <i class='bx bx-bed cart' ></i>
        </div>
        </div>
  </div>
</section>

<?php require('./includes/scripts.php')?>
</body>
</html> 