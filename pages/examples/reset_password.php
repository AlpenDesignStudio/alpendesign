<?php
session_start();

$_SESSION['password'];

include("check.php");

if(isset($_POST['Submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  ar_visitor where password='".$_SESSION['password']."' && email='".$_SESSION['email']."'");

  
$row = mysqli_fetch_row($sql);


if ($row!=0){

  $row_data = mysqli_fetch_array($sql,MYSQLI_ASSOC);

$pp=$_POST['npwd'];
$npwd = hash('sha256', $pp); // password hashing using SHA256
 $con=mysqli_query($con,"update ar_visitor set password='".$npwd."' where email='".$_SESSION['email']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
//header('location:user.php');
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reset Password</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">


    <script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
</head>

<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Alpen<b>Design</b></a>
            <small>WELCOME TO ALPEN DESIGN</small>
        </div>
        <div class="card">
            <div class="body">
           
                <form id="forgot_password" method="POST" onSubmit="return validate_password_reset();">

                

                    <div class="msg">
                       Reset Your Password AnyTime
                    </div>


    <p style="color:red;"><?php echo $_SESSION['msg1'];?>
                   <?php echo $_SESSION['msg1']="";?></p>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="opwd" id="opwd" placeholder="Old Password" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="npwd" id="npwd" placeholder="New Password" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="cpwd" id="cpwd" placeholder="confirm Password" required autofocus>
                        </div>
                    </div>


                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" id="reset-password" value="Reset Password" name="Submit" >RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="sign-in.php">Sign In!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>





				
				 <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/forgot-password.js"></script>
</body>

</html>