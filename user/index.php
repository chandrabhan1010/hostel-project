<?php require('includes/db_config.php');
      require('includes/essentials.php');
      session_start();
     
      if((isset($_SESSION['userLogin'])&& $_SESSION['userLogin']==true))
      {
         redirect('dashboard.php');
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Login Panel</title>
    <?php require('includes/links.php')?>
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
<body class="bg-light">

<div class="login-form text-center rounded bg-white shadow overflow-hidden ">

    <form method="POST">
        <h4 class="bg-dark text-white py-3">USER LOGIN PANEL</h4>
        <div class="p-4">
            <div class="mb-3">
                <input name="user_name" required type="text" class="form-control shadow-none text-center" placeholder="Username">
            </div>

            <div class="mb-4">
                 <input name="user_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
            </div>

            <button name="login" type="submit "class="btn text-white btn-brand shadow-none">LOGIN</button>
        </div>
    </form>

</div>

<?php
if(isset($_POST['login'])) 
{
    $frm_data = filteration($_POST);
    $query ="SELECT * FROM `user_cred` WHERE `user_name` = ? AND `user_pass` = ?";

    $values = [$frm_data['user_name'], $frm_data['user_pass']];

    $datatypes = "ss";

    $res = select($query, $values, $datatypes);

    if($res->num_rows==1)
    {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['userLogin']= true;
    $_SESSION['userId'] = $row['sr_no'];
    redirect('dashboard.php');
    }
    else
    {
        alert('error','Login failed -Invalied Credentials !');
    }
}
?>
<?php require('./includes/scripts.php')?>
</body>
</html>