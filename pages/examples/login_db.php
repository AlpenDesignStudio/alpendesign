<?php
 session_start(); 
//set vars
$user = $_POST['uname'];
$pass = md5($_POST['pword']);

if ($user&&$pass){
  //connect to db
  include('check.php');

  $query = mysqli_query($con,"SELECT * FROM ar_visitor WHERE uname='".$user."'");
  $numrows = mysqli_num_rows($query);
  if ($numrows!=0){
    $row_data = mysqli_fetch_array($query,MYSQLI_ASSOC);
    // print_r($row_data);die;
    $dpt = $row_data['dpt'];
    $vid = $row_data['visitor_id'];
    $uname = $row_data['uname'];
     header('Location: ../../home.php?vid='.$vid.'&dpt='.$dpt.'&uname='.$uname);
    // header('Location: ./admin/admin.php?vid='.$vid.'&dpt='.$dpt.'&uname='.$uname);
  }else{
        die("incorrect username/password!");
  }
}else{
  echo "user does not exist!";
}
// }else{
//     die("please enter a username and password!");
// }
?>