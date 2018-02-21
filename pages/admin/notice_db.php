<?php
include "check.php";
if(!empty($_POST)){
session_start();
$notice_date = $_POST['notice_date'];
$headline = $_POST['headline'];
$notice = $_POST['notice'];

$sql = mysqli_query($con,"INSERT INTO notice (notice_date,headline,notice) values ('$notice_date','$headline','$notice')");
//echo $sql;die();
if($sql){

        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>'Notice Added Successfully !!');
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
