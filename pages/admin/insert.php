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



    //something posted

    if (isset($_POST['approve'])) {
        $sql = "INSERT INTO leavedb (id,approval) VALUES ('$id','YES') ON DUPLICATE KEY UPDATE approval='YES'";
    } else {
        $sql1 = "INSERT INTO leavedb (id,approval) VALUES ('$id','no') ON DUPLICATE KEY UPDATE approval='no'";
    }



mysqli_close($conn);



?>