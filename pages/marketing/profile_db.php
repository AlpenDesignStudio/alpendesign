<?php

session_start();

include("check.php");

if(!empty($_POST)) {

	$dob1=$_POST['dob1'];
	$blood=$_POST['blood'];
	$designation=$_POST['designation'];
	$salary=$_POST['salary'];
	$company=$_POST['company'];
	$prev=$_POST['prev'];
	$year=$_POST['year'];
	$qua=$_POST['qua'];
    


$query =mysqli_query($con,"INSERT INTO profile_info (dob1,blood,designation,salary,company,prev,year,qua) VALUES ('".$dob1."','".$blood."','".$designation."','".$salary."','".$company."','".$prev."','".$year."','".$qua."')" );

    /*echo $query;die();
*/
if($query){

        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>'Registration is Done Successfully !!');
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