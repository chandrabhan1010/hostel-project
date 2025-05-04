<?php
    $host = 'localhost'; // Database host
    $user ='root'; // Database username
    $pass = ''; // Database password
    $db = 'hosteldb'; // Database name

    $con = mysqli_connect($host, $user, $pass, $db) ;
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }


     

    ?>