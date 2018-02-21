<?php
include "check.php";

$id=$_GET['id'];

//$approval=YES; 
$sql = "INSERT INTO leavedb (id,approval) VALUES ('$id','NO') ON DUPLICATE KEY UPDATE approval='NO'";
if (mysqli_query($con,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
