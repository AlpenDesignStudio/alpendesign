<?php
session_start(); 
//set vars
$user = $_POST['email'];
$pass = $_POST['pword'];

if ($user&&$pass){
  //connect to db
  include('check.php');

  $query = mysqli_query($con,"SELECT * FROM ar_visitor WHERE email='".$user."' ");
  $numrows = mysqli_num_rows($query);
  if ($numrows!=0){
    $row_data = mysqli_fetch_array($query,MYSQLI_ASSOC);
    // print_r($row_data);die;
    $dpt = $row_data['dpt'];
    $vid = $row_data['visitor_id'];
    $email = $row_data['email'];
     header('Location: ../../home.php?vid='.$vid.'&dpt='.$dpt.'&email='.$email);
    // header('Location: ./admin/admin.php?vid='.$vid.'&dpt='.$dpt.'&uname='.$uname);
  }else{
        die("incorrect username/password!");
  }
}else{
  echo "user does not exist!";
}
// else{
//   echo "user11 does not exist!";
//     // die("please enter a username and password!");
// }
?>