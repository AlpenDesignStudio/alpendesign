<?php
include "check.php";

$id=$_GET['id'];

//$approval=YES; 
$sql = "INSERT INTO leavedb (id,approval) VALUES ('$id','YES') ON DUPLICATE KEY UPDATE approval='YES'";
if (mysqli_query($con,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
