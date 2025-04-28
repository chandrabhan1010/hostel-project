<?php
$con  = mysqli_connect('localhost','root','','hosteldb');

if(mysqli_connect_errno())
{
 die("Can not connect to database ".mysqli_connect_errno());
}

?>