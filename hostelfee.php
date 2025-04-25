<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="./images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require('./includes/links.php')?>

    <title>Submit Hostel Fee</title>
    <?php require('./includes/header.php')?>
    <style>
         
    .form-section-title {
      font-weight: bold;
      font-size: 20px;
      color: blue;
      margin-bottom: 20px;
    }
    .form-header {
      background-color:#3c8dbc;
      color: white;
      padding: 10px;
      text-align: center;
      font-weight: bold;
      font-size: 20px;
    }
    .form-container {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      background-color: white;
      max-width: 1000px;
      margin: 40px auto;
    }
    label {
      font-weight: 500;
    }
  </style>
    

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

<div class="form-container shadow">
  <div class="form-header">ONLINE HOSTEL FEE PAYMENT</div>
  <div class="form-section-title">Personal Details</div>
  <form>
    <div class="row g-3 ">
      <div class="col-md-6">
        <label>Enrollment Number :</label>
        <input type="text" class="form-control shadow-none" placeholder="Enter Enrollment No.">
      </div>
      <div class="col-md-6">
        <label>Name OF Student :</label>
        <input type="text" class="form-control shadow-none" placeholder="Enter Name">
      </div>
      <div class="col-md-6">
        <label>Course Type :</label>
        <select class="form-select shadow-none">
          <option selected>Select Program</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Father Name :</label>
        <input type="text" class="form-control shadow-none" placeholder="Enter Father Name">
      </div>
      <div class="col-md-6">
        <label>Course Name :</label>
        <input type="text" class="form-control shadow-none">
      </div>
      <div class="col-md-6">
        <label>Year's :</label>
        <select class="form-select shadow-none">
          <option selected>Select Year</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Semester :</label>
        <select class="form-select shadow-none">
          <option selected>Select Semester</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Date Of Birth :</label>
        <input type="date" class="form-control shadow-none">
      </div>
      <div class="col-md-6">
        <label>Category:</label>
        <select class="form-select shadow-none">
          <option selected>Select Category</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Gender :</label>
        <select class="form-select shadow-none">
          <option selected>Select Gender</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Student Type :</label>
        <select class="form-select shadow-none">
          <option selected>Select</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Physically Disabled Person :</label>
        <select class="form-select shadow-none">
          <option selected>Select</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Mobile No. :</label>
        <input type="text" class="form-control shadow-none" placeholder="Enter mobile Number :">
      </div>
      <div class="col-md-6">
        <label>Total Payable Fee Amount Rs. :</label>
        <select class="form-select shadow-none">
          <option selected></option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Address:</label>
        <input type="text" class="form-control shadow-none" placeholder="Enter Address">
      </div>
      <div class="col-md-6">
        <label>Email Id :</label>
        <input type="email" class="form-control shadow-none" placeholder="Enter Email ID :">
      </div>
      <div class="col-md-6">
        <label>State :</label>
        <select class="form-select shadow-none">
          <option selected>Select State</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>City:</label>
        <input type="text" class="form-control shadow-none" placeholder="Enter City Name :">
      </div>
      <div class="col-md-6">
        <label>Zip Code: </label>
        <input type="text" class="form-control shadow-none" placeholder="Enter Zip Code">
      </div>
    </div>
    <div class="text-end mt-4">
      <button class="btn " style="background-color: #3c8dbc;color:white">Pay Now</button>
    </div>
  </form>
</div>


<?php require('./includes/footer.php')?>

<script src="./js/jquery.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>body>
</html>