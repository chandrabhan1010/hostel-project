<?php
    $host = 'localhost'; // Database host
    $user ='root'; // Database username
    $pass = ''; // Database password
    $db = 'hosteldb'; // Database name

    $con = mysqli_connect($host, $user, $pass, $db) ;
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function filteration($data)
    {
        foreach($data as $key => $value) 
        {
        // trim()
        // stripslashes()
        // htmlspecialchars()
        // strip_tags()
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
        }
        return $data;
    
    }
     function select($query, $values, $datatype)
     {
        $con =$GLOBALS['con'];
        if($stmt =mysqli_prepare(($con),$query))
        {
           mysqli_stmt_bind_param($stmt, $datatype, ...$values); //splate operator
           if(mysqli_stmt_execute($stmt))
           {
            $res= mysqli_stmt_get_result($stmt);
            return $res;
           }
           else
           {
            mysqli_stmt_close($stmt);
            die("Query cannot be execute - select");
           }
      
        }
        else{
            die("Query cannot be prepared -select  ");
        }
     }
    ?>