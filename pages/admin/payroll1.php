n<?php
include "check.php";
if(!empty($_POST)){
session_start();

  // $empno = $_POST['empno'];
  $fullname = $_POST['fullname'];
  $dpt = $_POST['dpt'];
   // $init = $_POST['init'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  // $pay = $_POST['pay'];
  // $dayswork = $_POST['dayswork'];
  // $otrate = $_POST['otrate'];
  // $others = $_POST['others'];
  // $allow = $_POST['allow'];
  // $advances = $_POST['advances'];
  // $insurance = $_POST['insurance'];


 // $sql = "INSERT INTO payroll (fullname,dpt,init,email,position,pay,dayswork,otrate,others,allow,advances,insurance)  VALUES ('".$fullname."','".$dpt."','".$init."','".$email."','".$position."','".$pay."','".$dayswork."','".$otrate."','".$others."','".$allow."','".$advances."','".$insurance."')";

 $sql = mysqli_query($con,"INSERT INTO payroll (fullname,dpt,email,position)  VALUES 
    ('".$fullname."','".$dpt."','".$email."','".$position."')");


    if($sql){

        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>' Added Successfully !!');
        echo json_encode($response);
            //header('location:user.php');
    }else{
        $response = array('status'=> FALSE,'error'=>'Oops Something Went Wrong !!');
        echo json_encode($response);
    }
}
else{
    $response = array('status'=> FALSE,'error'=>'Oops1 Something Went Wrong !!');
    echo json_encode($response);
}
  
?>