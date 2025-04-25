<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="./images/hostellogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <?php require('./includes/links.php')?>

    <title>Download Hostel Receipt</title>
    <?php require('./includes/header.php')?>

    <style>
        .receipt-box {
        max-width: 600px;
        margin: 50px auto;
        padding: 100px;
        border-radius: 10px;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        background-color: #fff;
        }
        .receipt-box h4 {
        color:black;
        margin-bottom: 20px;
        }
        .form-control, .form-select {
        border: 2px solid green;
        border-radius: 6px;
        }
        .btn-download {
        background-color:#3c8dbc;
        color: white;
        font-weight: 500;
        }
        .btn-download:hover {
        background-color:#3c8dbc;
        }
        hr {
        margin: 20px 0;
        }
        @media (max-width: 576px) {
        .receipt-box {
            padding: 40px 20px;
            margin: 20px;
        }

        .receipt-box h4 {
            font-size: 20px;
        }

        .form-control,
        .form-select,
        .btn-download {
            font-size: 16px;
        }
        }
    </style>

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

<div class="receipt-box shadow ">
    <h4>Download Application Receipt</h4>
    <hr>
    <form>
      <div class="mb-3">
        <input type="text" class="form-control shadow-none text-center" placeholder="Enter Registration Number">
      </div>
      <div class="mb-3">
        <select class="form-select shadow-none text-center" aria-label="Default select example" required="required">
          <option selected>Select Year</option>
            <option value="UG">UG</option>
            <option value="PG">PG</option>
            <option value="DIPLOMA">DIPLOMA</option>
 
        </select>
      </div>
      <button type="submit" class="btn btn-download w-100">Download</button>
    </form>
</div>




<?php require('./includes/footer.php')?>

<script src="./js/jquery.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>
</html>