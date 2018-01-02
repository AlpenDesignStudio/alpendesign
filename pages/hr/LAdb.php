<?php
session_start(); 
 
$email = $_SESSION['email']; 
//print_r($_SESSION);die();
include "check.php";

$dpt = $_POST['dpt'];
$day = $_POST['day'];
$dd = $_POST['dd'];
$priority = $_POST['priority'];
$title = $_POST['title'];

$sql = mysqli_query($con,"INSERT INTO leavedb (dpt,day,dd,priority,title) values ('$dpt','$day','$dd','$priority','$title')");

$numrows = mysqli_num_rows($sql);
//print_r($numrows);die();
if ($numrows!=0){
$row_data = mysqli_fetch_array($sql,MYSQLI_ASSOC);
}

if(!$sql)
 echo "not working";
else 
{
  header("Location: leaveapplication.php");
} 

?>