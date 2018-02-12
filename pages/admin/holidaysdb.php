<?php
include "check.php";
if(!empty($_POST)){
session_start();
$leave_cat = $_POST['leave_cat'];
$leave_cause = $_POST['leave_cause'];
$leave_date = $_POST['leave_date'];
$leave_datee = $_POST['leave_datee'];



$sql = mysqli_query($con,"INSERT INTO holidays (leave_cat,leave_cause,leave_date,leave_datee) values ('$leave_cat','$leave_cause','$leave_date','$leave_datee')");
//echo $sql;die();
if($sql){

        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>'Holiday Added Successfully !!');
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
