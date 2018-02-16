
<?php
  
    include('check.php');

if(!empty($_POST)){
      
        // $status = $_POST['status'];
        $dpt = $_POST['dpt'];
        $pass = $_POST['password'];
        $FirstName = $_POST['fname'];
        $LastName = $_POST['lname'];
        $email = $_POST['email'];
        $Town = $_POST['town'];
        $State = $_POST['state'];
        $country = $_POST['country'];
        $Sex = $_POST['sex'];
        $DateOfBirth = $_POST['dob'];
        
        $dt = date('Y-m-d H:i:s');
        
       // password encrypt using SHA256();
        $password = hash('sha256', $pass);

      $query=mysqli_query($con,"INSERT INTO ar_visitor 
(dpt,password,fname,lname,email,town,state,country,sex,dob,added_on,updated_on)VALUES('".$dpt."','".$password."','".$FirstName."','".$LastName."','".$email."','".$Town."','".$State."','".$country."','".$Sex."','".$DateOfBirth."','".$dt."','".$dt."')");
// print_r($query);die();
// $num_rows = mysqli_num_rows($query);
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


   
