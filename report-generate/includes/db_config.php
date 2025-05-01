<?php
$con  = mysqli_connect('localhost','root','','hosteldb');

if(mysqli_connect_errno())
{
 die("Can not connect to database ".mysqli_connect_errno());
}

define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/HostelProject/data/upload/");
define("FETCH_SRC","http://localhost:8080/HostelProject/data/upload/");

?>