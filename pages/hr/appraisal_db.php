<?php

include "check.php";

if(!empty($_POST)){
session_start();
$dep = $_POST['dep'];
$ini = $_POST['ini'];
$att = $_POST['att'];
$atti = $_POST['atti'];
$opp = $_POST['opp'];
$o = $_POST['o'];

$sql = mysqli_query($con,"INSERT INTO appraisal (dep,ini,att,atti,opp,o) values ('".$dep."','".$ini."','".$att."','".$atti."','".$opp."','".$o."')");
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
