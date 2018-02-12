<?php
session_start(); 
 
$email = $_SESSION['email']; 
//print_r($_SESSION);die();
include "check.php";
if(!empty($_POST)){
$dpt = $_POST['dpt'];
$day = $_POST['day'];
$dd = $_POST['dd'];
$dd1 = $_POST['dd1'];
$priority = $_POST['priority'];
$title = $_POST['title'];

$sql = mysqli_query($con,"INSERT INTO leavedb (dpt,day,dd,dd1,priority,title) values ('$dpt','$day','$dd','$dd1','$priority','$title')");

if($sql){

        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>'Password Changed Successfully !!');
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