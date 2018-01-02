<?php
$servername = "localhost";
$database = "alpendesign";
$username = "root";
$password = "root";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$id=$_GET['id'];

//$approval=YES; 
$sql = "INSERT INTO leavedb (id,approval) VALUES ('$id','YES') ON DUPLICATE KEY UPDATE approval='YES'";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>