<?php
include "check.php";
session_start();
$leave_cat = $_POST['leave_cat'];
$leave_cause = $_POST['leave_cause'];
$leave_date = $_POST['leave_date'];



$sql = mysqli_query($con,"INSERT INTO leaves (leave_cat,leave_cause,leave_date) values ('$leave_cat','$leave_cause','$leave_date')");

if(!$sql)
 echo "no rows added";
else 
{

 header('location:addLeave.php');    
} 
?>