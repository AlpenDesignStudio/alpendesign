<?php
session_start();

$_SESSION['password'];
//print_r($opwd);die();
//print_r($_SESSION);die();
include("check.php");



if(isset($_POST['Submit']))
{
$sql=mysql_query("SELECT password FROM  ar_visitor where password='".$_SESSION['password']."' && email='".$_SESSION['email']."'");

  
$row_data = mysqli_num_rows($sql);

print_r($row_data);die();
if ($row_data!=0){

  $num = mysqli_fetch_array($sql,MYSQLI_ASSOC);

 $con=mysql_query("update ar_visitor set password='".$_POST['npwd']."' where email='".$_SESSION['email']."'");
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login for Change Password</title>
     <!-- Bootstrap Core CSS -->
  <!--   <link href="css/bootstrap.min.css" rel="stylesheet"> -->
     <link href="../../plugins/css11/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
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

<body>

   

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
               
                   <p style="color:red;"><?php echo $_SESSION['msg1'];?>
                   <?php echo $_SESSION['msg1']="";?></p>
             <form name="chngpwd" action="" method="post" onSubmit="return valid();">
              <table align="center">
              <tr height="50">
              <td>Old Password :</td>
              <td><input type="password" name="opwd" id="opwd"></td>
              </tr>
          <tr height="50">
              <td>New Passowrd :</td>
              <td><input type="password" name="npwd" id="npwd"></td>
              </tr>
          <tr height="50">
              <td>Confirm Password :</td>
              <td><input type="password" name="cpwd" id="cpwd"></td>
              </tr>
              <tr>
             <!--  <td><a href="index.php">Back to login Page</a></td> -->
              <td><input type="submit" name="Submit" value="Change Passowrd" /></td>
              </tr>
                <tr>
              <td></td>
              <td></td>
              </tr>
              </table>
              </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

     <!-- jQuery Version 1.11.1 -->
    <script src="../../plugins/js11/jquery.js"></script>
   <!--  <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../../plugins/js11/bootstrap.min.js"></script>
   <!--  <script src="js/bootstrap.min.js"></script> -->


</body>

</html>
