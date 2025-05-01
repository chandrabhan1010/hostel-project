<?php
function userLogin()
{
    session_start();
    if(!(isset($_SESSION['userLogin'])&& $_SESSION['userLogin']==true))
    {
        echo"<script>
        window.location.href='index.php';
        </script>";
    }
}

function redirect($url)
{
    echo"
    <script>
    window.location.href='$url';
    </script>
    ";
}

function alert($type,$msg)
{
     $bs_class = ($type == "success")? "alert-success": "alert-danger";
    // hero dock method alert is constant and maintain indent 
    echo <<<alert
        <div class="alert $bs_class alert-dismissible fade show custom-alert " role="alert">
        <strong class=" me-3">$msg</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    alert;
}
?>