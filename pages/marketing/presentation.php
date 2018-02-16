<?php
session_start();
$fullname = $_SESSION['fullname']; 
$email = $_SESSION['email']; 

include_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Social Media</title>
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

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

 <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <?php include ("../../templates/top.php"); ?>
            <!-- #Top Bar -->
            <section>
                <!-- Left Sidebar -->
                <aside id="leftsidebar" class="sidebar">
                    <!-- User Info -->
                    <?php include ("userInfo_marketing.php"); ?>
                        <!-- #User Info -->
                        <!-- Menu -->

                        <?php include ("../../templates/marketing_menu.php"); ?>
                            <!-- #Menu -->
                            <!-- Footer -->
                            <?php include ("../../templates/footer.php"); ?>
                                <!-- #Footer -->
                </aside>

            </section>

    <section class="content">
       


        <div class="row clearfix" style="text-align: center;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card" >
                                <div class="header" style="background-color: #673AB7;">
                                    <h2 style="text-align: center;color: #ffffff;">
                                DOWNLOAD OR UPLOAD PRESENTATION FOR MARKETING
                            </h2>
                                </div>
                                <div class="body">
                                    <form action="" id="" class="" method="post" enctype="multipart/form-data">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <input name="file" style="margin-left: 50%" type="file" multiple />
                                            </div>

                                            <div class="col-sm-6">
                                                <button type="submit" name="btn-upload" class="btn btn-danger waves-effect" style="width: 50%;margin-right: 50%;">
                                                    <i class="material-icons">touch_app</i>
                                                    <span>UPLOAD</span>
                                                </button>



                                            </div>
                                             
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <?php
    if(isset($_GET['success']))
    {
         
      

        ?>
                                                    <div class="alert bg-green">
                                                        FILE UPLOADED SUCCESSFULLY<br>
                                                    </div>
                                                     


                                                    <?php
    }
    else if(isset($_GET['fail']))
    {
        ?>
                                                        <div class="alert bg-red">
                                                            PROBLEM WHILE FILE UPLOADING !

                                                        </div>

                                                        <?php
    }
    else
    {
        ?>
                                                            <div class="alert bg-pink">
                                                                TRY TO UPLOAD ANY FILES

                                                            </div>

                                                            <?php
    }
    ?>

    <?php
    $sql="SELECT * FROM presentationupload ORDER BY id ASC";
    // echo $sql;die();
    $result_set=mysql_query($sql);
    // echo $result_set;die();
    while($row=mysql_fetch_array($result_set))
    {   

       

        ?>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
        <a href="presentationupload/<?php echo $row['file'] ?>"  class="btn bg-cyan btn-lg btn-block waves-effect" type="button" target="_blank"><?php echo $row['file'] ?></a></div>

                                            
                                                
<?php

    }
    ?>





<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
    $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="presentationupload/";
    
    // new file size in KB
    $new_size = $file_size/1024;  
    // new file size in KB
    
    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case
    
    $final_file=str_replace(' ','-',$new_file_name);
    
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $sql="INSERT INTO presentationupload(file,type,size) VALUES('$final_file','$file_type','$new_size')";
        mysql_query($sql);
        ?>
        <script>
        /*alert('successfully uploaded');*/
        window.location.href='presentation.php?success';

        </script>
        <?php
    }
    else
    {
        ?>
        <script>
        /*alert('error while uploading file');*/
        window.location.href='presentation.php?fail';
        </script>
        <?php
    }
}
?>







                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
    

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>