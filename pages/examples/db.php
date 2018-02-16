
<?php
  
    include('check.php');

if(!empty($_POST)){
      
        // $status = $_POST['status'];
        $dpt = $_POST['dpt'];
        $pass = $_POST['password'];
        $fullname = $_POST['fullname'];
        $no = $_POST['no'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $DateOfBirth = $_POST['dob'];
        $dt = date('Y-m-d H:i:s');
        
       // password encrypt using SHA256();
        $password = hash('sha256', $pass);

      $query=mysqli_query($con,"INSERT INTO register
    (dpt,password,fullname,no,email,address,gender,dob,added_on,updated_on)VALUES('".$dpt."','".$password."','".$fullname."','".$no."','".$email."','".$address."','".$gender."','".$DateOfBirth."','".$dt."','".$dt."')");
    //print_r($query);die();
    // $num_rows = mysqli_num_rows($query);
    // print_r($_POST);die;

if($query){

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


   
