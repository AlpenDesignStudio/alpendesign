<?php
include "check.php";

if(!empty($_POST)){
session_start();

  // $empno = $_POST['empno'];
  $fullname = $_POST['fullname'];
  $dpt = $_POST['dpt'];
  $init = $_POST['init'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $pay = $_POST['pay'];
  $dayswork = $_POST['dayswork'];
  $otrate = $_POST['otrate'];
  $others = $_POST['others'];
  $allow = $_POST['allow'];
  $advances = $_POST['advances'];
  $insurance = $_POST['insurance'];


$res= mysqli_query($con,"SELECT * from payroll WHERE email='$email'");
  //print_r($res);die();
if((mysqli_num_rows ($res)) == 0){

 $sql = mysqli_query($con,"INSERT INTO payroll (fullname,dpt,email,position,init,pay,dayswork,otrate,others,allow,advances,insurance)  VALUES 
 	('".$fullname."','".$dpt."','".$email."','".$position."','".$init."','".$pay."','".$dayswork."','".$otrate."','".$others."','".$allow."','".$advances."','".$insurance."');");
}else {

    $sql =mysqli_query($con,"UPDATE payroll SET fullname='$fullname',dpt='$dpt',email='$email',init= '$init',position='$position',pay='$pay',dayswork='$dayswork',otrate='$otrate',others='$others',allow='$allow',advances='$advances',insurance='$insurance' WHERE email = '$email'");

  }

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