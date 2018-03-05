<?php
include "check.php";
if(!empty($_POST)){
session_start();
$dt = $_POST['dt'];
$task = $_POST['task'];


$sql = mysqli_query($con,"INSERT INTO activity (dt,task) values ('$dt','$task')");
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
