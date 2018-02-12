<?php
require_once('check.php');

if(!empty($_POST)){
	$given_email = mysqli_real_escape_string($con, $_POST['email']);
	$sql = "SELECT * FROM `ar_visitor` WHERE email = '$given_email'";
	$res = mysqli_query($con, $sql);
	$count = mysqli_num_rows($res);

 if($sql->num_rows > 0){


        // $_SESSION['msg1']="Password Changed Successfully !!";
        $response = array('status'=> TRUE,'data'=>'Password Changed Successfully !!');
        echo json_encode($response);
            //header('location:user.php');
    }else{
        $response = array('status'=> FALSE,'error'=>'Oops Something Went Wrong !!');
        echo json_encode($response);
    }
// else{
//     $response = array('status'=> FALSE,'error'=>'Oops1 Something Went Wrong !!');
//     echo json_encode($response);
// }

}


if($count == 1){
// echo "Send email to user with password";

// echo $count;die();
$r = mysqli_fetch_assoc($res);
$password = $r['pword'];
$to = $r['email'];
$subject = "Your Recovered Password";
 
$message = "Please use this password to login " . $password;
$headers = "From : info@twex.info";
if(mail($to, $subject, $message, $headers))
{
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}


		
	}else{
		echo "User name does not exist in database";
	}


 ?>