<?php
session_start();

$fullname = $_SESSION['fullname']; 
$email = $_SESSION['email']; 
?>
<?php
//include_once 'dbconfig.php';
include("check.php");

?>
    <!DOCTYPE html>
    <html>

    <head>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>File Upload</title>

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

        <!-- Colorpicker Css -->
        <link href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

        <!-- Dropzone Css -->
        <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">

        <!-- Multi Select Css -->
        <link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">

        <!-- Bootstrap Spinner Css -->
        <link href="../../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

        <!-- Bootstrap Tagsinput Css -->
        <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

        <!-- Bootstrap Select Css -->
        <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- noUISlider Css -->
        <link href="../../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../../css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/all-themes.css" rel="stylesheet" />

            <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>
    
    </head>

    <body class="theme-red">
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
                    <?php include ("userInfo_admin.php"); ?>
                        <!-- #User Info -->
                        <!-- Menu -->

                        <?php include ("../../templates/admin_menu.php"); ?>
                            <!-- #Menu -->
                            <!-- Footer -->
                            <?php include ("../../templates/footer.php"); ?>
                                <!-- #Footer -->
                </aside>

            </section>
            <section class="content">
                <div class="container-fluid">

                    <!-- File Upload | Drag & Drop OR With Click & Choose -->
                    <div class="row clearfix" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card" >
                                <div class="header" style="background-color: #673AB7;">
                                    <h2 style="text-align: center;color: #ffffff;">
                                VIEW NOTICE
                            </h2>
                                </div>
                               <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="text-align: center;">
                                    <thead>
                                        <tr> 
                                         <th class="view"> SR NO</th>
                                           <th class="view"> Notice Date</th>
                                            <th class="view"> Headline</th>
                                            <th class="view"> Notices</th> 
                                            
                                         
                                        </tr>
                                    </thead>
                             
                                    <tbody>

 <?php


// get the records from the database

include('connect-db.php');


if ($result = $mysqli->query("SELECT id,notice_date,headline,notice from notice"))
   
{

if ($result->num_rows > 0)
{


while ($row = $result->fetch_object())
{

$notice_date=date('d-m-Y ',strtotime($row->notice_date));


   
// set up a row for each record
echo "<tr>";

echo "<td>" . $row->id . "</td>";
echo "<td>" . $notice_date . "</td>";
echo "<td>" . $row->headline . "</td>";
echo "<td>" . $row->notice . "</td>";


echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>
                            </tbody>
 
       
                                </table>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->

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

                <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

            <!-- Bootstrap Colorpicker Js -->
            <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

            <!-- Dropzone Plugin Js -->
            <script src="../../plugins/dropzone/dropzone.js"></script>

            <!-- Input Mask Plugin Js -->
            <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

            <!-- Multi Select Plugin Js -->
            <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

            <!-- Jquery Spinner Plugin Js -->
            <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

            <!-- Bootstrap Tags Input Plugin Js -->
            <script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

            <!-- noUISlider Plugin Js -->
            <script src="../../plugins/nouislider/nouislider.js"></script>

            <!-- Waves Effect Plugin Js -->
            <script src="../../plugins/node-waves/waves.js"></script>

            <!-- Custom Js -->
            <script src="../../js/admin.js"></script>
            <script src="../../js/pages/forms/advanced-form-elements.js"></script>

            <!-- Demo Js -->
            <script src="../../js/demo.js"></script>
    </body>

    </html>