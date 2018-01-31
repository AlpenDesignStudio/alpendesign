<?php

session_start();

include("check.php");

if(!empty($_POST)){

    $sql=mysqli_query($con,"SELECT password FROM  ar_visitor where password='".hash('sha256',$_POST['opwd'])."' && email='".$_SESSION['email']."'");

    if($sql->num_rows > 0){

        $con=mysqli_query($con,"update ar_visitor set password='".hash('sha256',$_POST['npwd'])."' where email='".$_SESSION['email']."'");

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