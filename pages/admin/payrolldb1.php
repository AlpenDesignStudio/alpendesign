<?php

include "check.php";

if(!empty($_POST)){
session_start();
  $fullname = $_POST['fullname'];
  $dpt = $_POST['dpt'];

$sql = mysqli_query($con,"INSERT INTO payroll (fullname,dpt) values ('".$fullname."','".$dpt."')");
//echo $sql;die();
if($sql){

        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>'Performance Added Successfully !!');
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