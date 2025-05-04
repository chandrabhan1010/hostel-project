<?php
require('./includes/essentials.php');
userLogin();
session_regenerate_id(true);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/userpanel.css">
    
    <title>User dashboard</title>
    <?php require('./includes/links.php');?>
</head>
<body class="bg-light">

<!-- Sidebar Design -->
<?php
    require('db_config.php');
    if(isset($_SESSION["email"]))
    {
        $email = $_SESSION["email"];

        $sql = "SELECT * FROM studentregistration WHERE email_id='$email'";
    
        $result = mysqli_query($con,$sql);
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
                <div class="sidebar">
                    <div class="logo-details">
                        <img src="./img/usericon.png">
                        <span class="logo_name">User Panel</span>
                    </div>
                    <ul class="nav-links">
                        <li>
                            <a href="dashboard.php" >
                            <i class='bx bx-grid-alt togle'  ></i>
                            <span class="link_name">Dashboard</span> 
                            </a>
                        </li>
                        <li>
                            <a href="student_profile.php">
                            <i class="bi bi-person-vcard-fill"></i>
                            <span class="link_name">View Profile</span> 
                            </a>
                        </li>

                        <li>
                            <a href="../report-generate/viewidcard.php?enrollno=<?php echo $row['enrollment']?>">
                            <i class='bx bxs-building-house'></i>
                            <span class="link_name">View Id Card</span> 
                            </a>
                        </li>

                        <li>
                            <a href="update.php?id=<?php echo $row['email_id']?>">
                            <i class="bi bi-people-fill"></i>
                            <span class="link_name">Update Profile</span> 
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
                                <li><a href="registercomplaint.php?id=<?php echo $row['email_id']?>">Complaint Register</a></li>
                                <li><a href="viewcomplaintstatus.php?id=<?php echo $row['registration_no']?>">View Complaint Status</a></li>
                
                            </ul>
                        </li>

                        <li>
                            <a href="change_pass.php?id=<?php echo $row['email_id']?>">
                            <i class="bi bi-clipboard2-data"></i>
                            <span class="link_name">Change Password</span> 
                            </a>
                        </li>

                        
                        <li>
                            <a href="logout.php">
                            <i class='bx bx-log-in'></i>
                            <span class="link_name">Logout</span> 
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
               <?php echo "<img src='" .$row['std_img']."'>";?>
                <span class="ms-3"><?php echo $row['name']?></span> 

                </div>
                <?php
            }
        }
    }
    ?>
    
</nav>