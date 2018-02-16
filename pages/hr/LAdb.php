<?php
session_start(); 

include "check.php";

if(!empty($_POST)){

$dpt = $_POST['dpt'];
$day = $_POST['day'];
$dd = $_POST['dd'];
$priority = $_POST['priority'];
$title = $_POST['title'];
$email = $_POST['email'];

$sql = mysqli_query($con,"INSERT INTO leavedb (dpt,day,dd,priority,title,email) values ('$dpt','$day','$dd','$priority','$title','$email')");

if($sql){

        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>'Leave Added Successfully !!');
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