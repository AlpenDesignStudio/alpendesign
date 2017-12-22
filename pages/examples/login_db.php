<?php
session_start(); 
//set vars
$email = $_POST['email'];
$pass = $_POST['password'];

if ($email&&$pass){
 //connect to db
 include('check.php');
  $password = hash('sha256', $pass); // password hashing using SHA256

 $query = mysqli_query($con,"SELECT * FROM ar_visitor WHERE email='".$email."' ");

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
}else{
 echo "user does not exist!";
}
// else{
//   echo "user11 does not exist!";
//     // die("please enter a username and password!");
// }
?>