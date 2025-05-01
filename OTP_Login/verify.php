<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <title>OTP LOGIN</title>
</head>
  <body>

  <div class="container mt-5">
  <h1>EMAIL OTP LOGIN WITH PHP</h1>
  <div class="alert alert-primary" role="alert">
  <?php
  if(isset($_REQUEST['msg']))
  echo $_REQUEST['msg'];
  ?>

  </div>
  <div class="mb-3">
        <form action="login.php" method="POST">
            <label for="exampleFormControlInput1" class="form-label">Enter OTP </label>
            <input type="number" class="form-control" name="user_otp" placeholder="5 Digit OTP">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-success">Verify OTP</button>
            </div>
        </form>
  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>