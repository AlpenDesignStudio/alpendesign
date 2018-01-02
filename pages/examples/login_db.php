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

$query = mysqli_query($con,"SELECT * FROM ar_visitor WHERE email='".$email."' && password='".$password."'");

    // $query1 = "insert into timesheet
    // (sr,dpt,uname,pword,visitor_id,start_time,end_time) values('".$sr."')";

  
$numrows = mysqli_num_rows($query);

if ($numrows!=0){
  $row_data = mysqli_fetch_array($query,MYSQLI_ASSOC);
  $dpt = $row_data['dpt'];

  //$email = $row_data['email'];
  $_SESSION['email']=$email;

  $_SESSION['password']=$row_data['password'];
   $row_data['password']=$pass;

  $_SESSION['dpt']=$dpt;

    $fname = $row_data['fname'];
    $_SESSION['fname']=$fname;

    $id = $row_data['visitor_id'];
     $_SESSION['visitor_id']=$id;

//print_r($_SESSION);die();
   header('Location: ../../home.php');
  
}else{
  die("<br/>Sorry, incorrect username/password!"); 


}
}else{
die("<br/>Sorry, incorrect username/password!"); 

}

// else{
//   echo "user11 does not exist!";
//     // die("please enter a username and password!");
// }
?>