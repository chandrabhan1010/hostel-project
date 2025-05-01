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

<!-- Sidebar Design -->
<div class="sidebar">
    <div class="logo-details">
        <img src="./img/admin_icon.png">
        <span class="logo_name">Admin Panel</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="dashboard.php" >
            <i class='bx bx-grid-alt togle'  ></i>
            <span class="link_name">Dashboard</span> 
            </a>
        </li>
        <li>
            <a href="room_registration.php">
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

        <li class="application-dropdown">
            <a href="#" onclick="toggleDropdown(event)">
            <i class="bi bi-newspaper"></i>
                <span class="link_name">Applications</span> 
            <i class="bx bx-chevron-down arrow"></i> 
            </a>
            <!-- Dropdown submenu -->
            <ul class="sub-menu">
                <li><a href="ugapplication.php">UG</a></li>
                <li><a href="pgapplication.php">PG</a></li>
                <li><a href="ug_alloted.php">UG Alloted List</a></li>
                <li><a href="pg_alloted.php">PG Alloted List</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
            <i class='bx bxs-cog'></i>
            <span class="link_name">Setting</span> 
            </a>
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