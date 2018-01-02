<?php
include "check.php";
session_start();
$leave_cat = $_POST['leave_cat'];
$leave_cause = $_POST['leave_cause'];
$leave_date = $_POST['leave_date'];
$leave_datee = $_POST['leave_datee'];



$sql = mysqli_query($con,"INSERT INTO holidays (leave_cat,leave_cause,leave_date,leave_datee) values ('$leave_cat','$leave_cause','$leave_date','$leave_datee')");
//echo $sql;die();
if(!$sql)
 echo "no rows added";
else 
{

 header('location:viewholidays.php');    
} 
?>