<?php
// $id = $_SESSION['visitor_id'];
//print_r($_SESSION);die();
session_start();

$email = $_SESSION['email']; 
     //echo $id;die();
//print_r($_SESSION);die();


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Profile</title>
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

</head>

<body class="login-page" style="background-image: url(signin.jpg)" ;>
    <div class="login-box">
        <div class="logo"></div>


        <div class="card">
            <div class="body" style="box-shadow: 0 4px 8px 0 rgb(108, 136, 163), 0 6px 20px 0 rgb(109, 139, 167);border: 1px solid #e92163;">

               
                     <div class="header" style="background-color: #673AB7;text-align: center;">
                            <h2 style="color: #ffffff;">
                                UPLOAD YOUR PROFILE PICTURE
                            </h2>
                        </div>
 <?php 
include "check.php";
$user = $_SESSION['email']; 
// $res=mysqli_query($con,"Select * from profile where user='".$user."'");

$sql=mysqli_query($con,"INSERT INTO profile (user)
SELECT '$user' WHERE NOT EXISTS (SELECT * FROM profile)");
// echo "<img src='/image/'.$image.'' width='50px' height='40px'>";
// $d='upload/d.png';
// $sql1=mysqli_query($con,"INSERT INTO profile (url)
// SELECT '$d' WHERE NOT EXISTS (SELECT url FROM profile)");
 
$pull="select * from profile where user='$user'";
$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
$extension = @end(explode(".", $_FILES["file"]["name"]));
if(isset($_POST['pupload'])){
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        echo '<div class="plus">';
        echo "Uploaded Successully";
        echo '</div>';echo"<br/><b><u>Image Details</u></b><br/>";

        echo "Name: " . $_FILES["file"]["name"] . "<br/>";
        echo "Type: " . $_FILES["file"]["type"] . "<br/>";
        echo "Size: " . ceil(($_FILES["file"]["size"] / 1024)) . " KB";

        if (file_exists("../../pages/upload/" . $_FILES["file"]["name"]))
        {
        unlink("../../pages/upload/" . $_FILES["file"]["name"]);
        }
        else{

            $pic=$_FILES["file"]["name"];
            $conv=explode(".",$pic);
            $ext=$conv['1'];
            move_uploaded_file($_FILES["file"]["tmp_name"],"../../pages/upload/". $user.".".$ext);
            echo "Stored in as: " . "../../pages/upload/".$user.".".$ext;
            $url=$user.".".$ext;
             // $d='<img src="upload/d.png">';
             // echo $d;die();
       

            $query=mysqli_query($con,"update profile set url='$url', lastUpload=now() where user='$user'");
            if($upl = $query){
            echo "<br/>Saved to Database successfully";
            }
         }
    }
}else{
 echo "File Size Limit Crossed 200 KB Use Picture Size less than 200 KB";
}
}

 ?>
<form action="" method="post" enctype="multipart/form-data">
<?php
$res=mysqli_query($con,"select url from profile  where user='$user'");
$pics=$res->fetch_assoc();
// print_r($pics);die();
$res=mysqli_query($con,"select url from profile  where user='$user'");      
         while($r=mysqli_fetch_row($res))
         {            
           if (empty($r[0])) {
            // print_r($r[2]);die();
                    echo '<div class="imgLow" >';
echo "<img src='../../pages/upload/d.png' alt='' padding-top: 7%;vertical-align: middle;height: 230px;width: 200px;margin-left: 20%;   class='doubleborder'/></div>";

                 }

else{
                 echo '<div class="imgLow" >';
echo "<img src='../../pages/upload/$pics[url]' alt='' padding-top: 7%;vertical-align: middle;height: 230px;width: 200px;margin-left: 20%;   class='doubleborder'/></div>";
              }


}

?>
<br><br>
<input type="file" name="file" /><br><br>
<input style="width: 100%;" type="submit" name="pupload" class="button btn btn-primary waves-effect" value="Upload"/>
</form>
            </div>
        </div>
    </div>
   
</body>

</html>




     <!-- Bootstrap Material Datetime Picker Plugin Js -->
   <!--  <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> -->

      <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <!-- Custom Js -->
   
    <!-- <script src="../../js/pages/forms/basic-form-elements.js"></script> -->

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>