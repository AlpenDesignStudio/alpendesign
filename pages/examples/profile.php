<?php
// $id = $_SESSION['visitor_id'];
//print_r($_SESSION);die();
session_start();
$fullname = $_SESSION['fullname']; 
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
    <style>
/*body{width:50%;min-width:200px;font-family:arial;}*/
/*#frmDemo {background: #98E6DB;padding: 40px;overflow:auto;}*/
#btn-submit{padding: 10px 20px;background: #555;border: 0;color: #FFF;display:inline-block;margin-top:20px;cursor: pointer;font-size: medium;}
#btn-submit:focus{outline:none;}
.input-control{padding:10px;width:100%;}
.input-group{margin-top:10px;}

.ajax_response {
    padding: 10px 20px;
    border: 0;
    display: inline-block;
    margin-top: 20px;
    cursor: pointer;
    display:none;
    color:#555;
}
</style>
</head>

<body class="login-page" style="background-image: url(signin.jpg)" ;>
    <div class="login-box">
        <div class="logo"></div>

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
            $queryy = "INSERT INTO profile(fullname,image) values('".$fullname."','".$image."')";

           //$query = "UPDATE profile SET image='".$image."' where fname='".$fname."' ";
       
            mysqli_query($con,$queryy) or die(mysqli_error($con));

      
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'profile/'.$fullname);

        }
     

       
    }

           
    ?>

        <div class="card">
            <div class="body" style="box-shadow: 0 4px 8px 0 rgb(108, 136, 163), 0 6px 20px 0 rgb(109, 139, 167);border: 1px solid #e92163;">

               
                     <div class="header" style="background-color: #673AB7;text-align: center;">
                            <h2 style="color: #ffffff;">
                                UPLOAD YOUR PROFILE PICTURE
                            </h2>
                        </div>
                    <form id="frmDemo" class="well" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group" >
                    <label for="file" >SELECT A PICTURE TO UPLOAD</label>
                    <input type="file" name="file" id="file" >
                    
                  </div>
                  <input  name='btn-submit' type="submit" class="btn btn-lg btn-primary" value="Upload" style="background-color: #673AB7 !important;">
                    <br><br>
                  <div id="error_message" class="" style=""></div>
                  <div id="success_message" class="" style=""></div>

                </form>
            </div>
        </div>
    </div>
   
</body>

</html>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>
$("#frmDemo").submit(function(e) {
    var file = $("#file").val();
    //var comment = $("#comment").val();
    
    if(file == "" ) {
        // $("#error_message").show().html("All Fields are Required");
    } else {
        // $("#error_message").html("").hide();
        $.ajax({
            type: "POST",
            url: "post-form.php",
            data: "name="+name,
            success: function(data){
                $('#success_message').fadeIn().html(data);
                setTimeout(function() {
                    $('#success_message').fadeOut("slow");
                }, 2000 );

            }
        });
    }
    e.preventDefault();
});
</script>   


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