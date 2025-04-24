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
            <i class='bx bx-grid-alt' ></i>
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
            <i class="bi bi-speedometer2"></i>
            <span class="link_name">Manage Student</span> 
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

        <li>
            <a href="#">
            <i class="bi bi-card-checklist"></i>
            <span class="link_name">Complaints</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class="bi bi-newspaper"></i>
            <span class="link_name">Applications</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class="bi bi-gear-fill"></i>
            <span class="link_name" >Setting</span> 
            </a>
        </li>

        <li>
            <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="link_name">Log out</span> 
            </a>    
        </li>
    </ul>
</div>

<!-- home content -->
 <section class="home-section">
 <nav>
    <div class="sidebar-button">
    <i class='bx bx-menu sidebarBtn'></i>
    <span class="dashboard">Dashboard</span>
    </div>
    <div class="search-box">
        <input type="text" placeholder="Search ....">
        <i class='bx bx-search'></i>
    </div>
    <div class="profile-details">
        <img src="./img/Admin-Profile.png" alt="">
         <span class="admin_name">Shiv kumar</span>
         <li class="bx bx-chevron-down"></li>
    </div>
 </nav>

 <!-- home content -->
  <div class="home-content">
    <div class="overview-boxes">
        <div class="box">
           <div class="left-side">
            <div class="box_topic">Order List</div>
            <div class="number">40,876</div>
            <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> Up from yesterday</span>
            </div>
           </div>
        </div>
    </div>
  </div>
 </section>

<?php require('./includes/scripts.php')?>
</body>
</html> 