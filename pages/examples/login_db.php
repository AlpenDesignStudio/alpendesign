<?php
session_start(); 

//set vars
$email = $_POST['email'];
$pass = $_POST['password'];

if ($email&&$pass){
//connect to db
include('check.php');
 $password = hash('sha256', $pass); // password hashing using SHA256

//print_r($password);die();
//$last_id=mysql_insert_id();

$query = mysqli_query($con,"SELECT * FROM register WHERE email='".$email."' && password='".$password."'");

    // $query1 = "insert into timesheet
    // (sr,dpt,uname,pword,visitor_id,start_time,end_time) values('".$sr."')";

  
$numrows = mysqli_num_rows($query);

if ($numrows!=0){
  $row_data = mysqli_fetch_array($query,MYSQLI_ASSOC);
  $dpt = $row_data['dpt'];

  //$email = $row_data['email'];
  $_SESSION['email']=$email;
   $row_data['email']=$email;

  $_SESSION['password']=$row_data['password'];
   $row_data['password']=$pass;

  $_SESSION['dpt']=$dpt;
   $row_data['dpt']=$dpt;

  $fullname = $row_data['fullname'];
  $_SESSION['fullname']=$fullname;

  $id = $row_data['visitor_id'];
  $_SESSION['visitor_id']=$id;

  $pic = $row_data['pic'];
  $_SESSION['pic']=$pic;

  $no = $row_data['no'];
  $_SESSION['no']=$no;

  $gender = $row_data['gender'];
  $_SESSION['gender']=$gender;

  $DateOfJoining = $row_data['doj'];
  $_SESSION['doj']=$DateOfJoining;

   $address = $row_data['address'];
  $_SESSION['address']=$address;


//print_r($_SESSION);die();
   header('Location: ../../home.php');
  
}
else{

$message = "Username or Password incorrect.Try again.";
echo "<script type='text/javascript'>alert('$message');</script>";
/*die("incorrect username/password!");*/
session_destroy();
/*header("location: sign-in.php");*/
echo "<script>setTimeout(\"location.href = 'sign-in.php';\",200);</script>";

}
}

else{
echo "user does not exist!";
session_destroy();
}

// else{
//   echo "user11 does not exist!";
//     // die("please enter a username and password!");
// }
?>


