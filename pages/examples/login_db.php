<?php
session_start(); 
//set vars
<<<<<<< HEAD
$user = $_POST['email'];
$pass = $_POST['pword'];
=======
$email = $_POST['email'];
$pass = $_POST['password'];
>>>>>>> caf6dd3ae1f1d1f376267b7d3841c2c8b37c8c9f

if ($email&&$pass){
 //connect to db
 include('check.php');
  $password = hash('sha256', $pass); // password hashing using SHA256

 $query = mysqli_query($con,"SELECT * FROM ar_visitor WHERE email='".$email."' ");

<<<<<<< HEAD
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
=======
    $row_data = mysqli_fetch_array($query,MYSQLI_ASSOC);
 $numrows = mysqli_num_rows($query);
 $p=$row_data['password'];
 // echo $p;die();
 if ($numrows!=0 && $p==$password){



   // print_r($row_data);die;
   $dpt = $row_data['dpt'];
   // $vid = $row_data['visitor_id'];
   $email = $row_data['email'];
    header('Location: ../../home.php?&dpt='.$dpt.'&email='.$email);
   // header('Location: ./admin/admin.php?vid='.$vid.'&dpt='.$dpt.'&uname='.$uname);
 }else{
       die("incorrect username/password!");
 }
>>>>>>> caf6dd3ae1f1d1f376267b7d3841c2c8b37c8c9f
}else{
 echo "user does not exist!";
}
// else{
//   echo "user11 does not exist!";
//     // die("please enter a username and password!");
// }
?>