<?php
session_start();
// $id = $_SESSION['visitor_id'];
$fname = $_SESSION['fname']; 
$email = $_SESSION['email']; 
     //echo $id;die();
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

     <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

     <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

</head>

<body style="background-color: #00BCD4;" >

  <section class="content">
        <div class="container-fluid">

            <!-- Body Copy -->
            <div class="row clearfix">

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                        <div class="header" style="background-color: #673AB7;text-align: center;">
                            <h2 style="color: #ffffff;">
                                UPLOAD YOUR PROFILE PICTURE
                            </h2>
                        </div>
                        <div class="body">
<?php
    include("check.php");
 
    if(isset($_POST['but_upload'])){
        
        $name = $_FILES['file']['name'];
        $target_dir = "profile/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

     
    


        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $query = "insert into profile(fname,image) values('".$fname."','".$image."')";



           
            mysqli_query($con,$query) or die(mysqli_error($con));

      
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'profile/'.$fname);

        }
     

       
    }

           
    ?>
           

        <div class="row" >
            <div class="col-lg-12">
               <form class="well" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group" >
                    <label for="file" >SELECT A PICTURE TO UPLOAD</label>
                    <input type="file" name="file" >
                    
                  </div>
                  <input  name='but_upload' type="submit" class="btn btn-lg btn-primary" value="Upload" style="background-color: #673AB7!important;">
                </form>
            </div>
          </div>

         <!--  <img src="../../images/user.png" width="48" height="48"  /> -->

                        </div>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            </div>
            
        </div>
    </section> 








     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

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
   
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>