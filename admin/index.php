<?php require('includes/db_config.php');
      require('includes/essentials.php');
      session_start();
      if((isset($_SESSION['adminLogin'])&& $_SESSION['adminLogin']==true))
      {
         redirect('dashboard.php');
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('includes/links.php')?>
    <title>Admin Login Panel</title>

    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light" data-bs-target=".navbar">

<!-- navbar -->
<nav class="top-nav " id="home">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-auto">
               <p>
                <i class='bx bxs-envelope' ></i>
                <span>ggbhostel@igntu.ac.in</span>
                </p>
                <p>
                <i class='bx bxs-phone-call' ></i>
                <span>(219) 555-0114</span>
                </p>
            </div>
            <div class="col-auto fs-5 socialicons">
                <div class="social-links">
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-google' ></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a> 
                </div>
            </div>
        </div>
    </div>
  </nav>    
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-ly-2 shadow-sm sticky-top">
        <div class="container-fluid">
           <a href="../index.php"> <img src="../images/hostellogo.png" class="logo"></a>
            <a class="navbar-brand me-4 fw-bold fs-3 h-font" href="../index.php">GGBH HOSTEL<span>.</span></a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../about_us.php">About us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../admission.php">Admission</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../rules.php">Rules</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../infrastructure.php">Infrastructure</a>
                </li>
                <li class="nav-item">
                <div class="btn-group" role="group">
                    <a  id="btnGroupDrop1"  type="button" class="nav-link dropdown-toggle"data-bs-toggle="dropdown">Portal</a>
                  
                    <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="../hostelfee.php">Submit Hostel Fee </a></li>
                            <li><a class="dropdown-item" href="../fee_receipt.php">Download Hostel Fee Recicpt</a></li>
                            <li><a class="dropdown-item" href="../hostel_receipt.php">Download Application Recicpt</a></li>
                    </ul>
                </div>
                </li>
                <li class="nav-item">
                <div class="btn-group" role="group">
                    <a  id="btnGroupDrop1"  type="button" class="nav-link dropdown-toggle"data-bs-toggle="dropdown">Registration form</a>
                    <ul class="dropdown-menu" >
                        <li><a class="dropdown-item " href="../ug_register.php">UG Registration </a></li>
                        <li><a class="dropdown-item " href="../pg_register.php">PG registration</a></li>
                    </ul>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../notice.php">Notice</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../contact_us.php">Contact us</a>
                </li>
            </ul>
            <div class="d-flex">

            <a href="http://localhost:8080/HostelProject/user" type="button" class="btn btn-brand shadow-none me-lg-3 me-2 "  >
            <img src="../images/usericon.png" class="fs-4 me-2 " style="height: 1rem; width:1rem;">User Login
             </a>
           <a href="http://localhost:8080/HostelProject/admin" type="button" class="btn btn-brand shadow-none me-lg-2 me-2 " >
           <img src="../images/igntulogo.png" class="fs-4 me-2 " style="height: 1rem; width:1rem;">Admin Login
           </a>
            </div>
        </div>
    </div>
</nav>

<?php if(isset($_SESSION['status'])):?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php  echo $_SESSION['status']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif;?>
    <?php unset($_SESSION['status']);?>

<div class="login-form text-center rounded bg-white shadow overflow-hidden ">

    <form method="POST">
        <h4 class="bg-dark text-white py-3">ADMIN LOGIN </h4>
        <div class="p-4">
            <div class="mb-3">
                <input name="admin_username" required type="text" class="form-control shadow-none text-center" placeholder="Username">
            </div>

            <div class="mb-4">
                 <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                 <a href="forget_pass.php" style="color:#3c8dbc">Forget Password ?</a>
                </div>

            <button name="login" type="submit "class="btn text-white btn-brand shadow-none">LOGIN</button>
        </div>
    </form>
</div>

<?php
if(isset($_POST['login'])) 
{
    $frm_data = filteration($_POST);
    $query ="SELECT * FROM `admin_cred` WHERE `admin_username` = ? AND `admin_pass` = ?";

    $values = [$frm_data['admin_username'], $frm_data['admin_pass']];

    $datatypes = "ss";

    $res = select($query, $values, $datatypes);

    if($res->num_rows==1)
    {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['adminLogin']= true;
    $_SESSION['adminId'] = $row['sr_no'];
    redirect('dashboard.php');
    }
    else
    {
        echo "<script>alert('Invalid Login Credential!');</script>";
    }
}


?>
<?php require('./includes/scripts.php')?>

</body>
</html>