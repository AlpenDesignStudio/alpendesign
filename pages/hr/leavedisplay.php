<?php
session_start();
$fullname = $_SESSION['fullname']; 
$email = $_SESSION['email'];
 
?>
    <!DOCTYPE html>
    <html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Leave Display</title>
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
                <?php include ("userInfo_hr.php"); ?>
                <!-- #User Info -->
                <!-- Menu -->
                <?php include ("../../templates/hr_menu.php"); ?>
                <!-- #Menu -->
                <!-- Footer -->
                <?php include ("../../templates/footer.php"); ?>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <!-- #END# Right Sidebar -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header" style="background-color: #673AB7;text-align: center;">
                                <h2 style="color: #ffffff;">
                                    LEAVE APPLICATIONS
                                </h2>
                            </div>
                            <?php include "check.php"; ?>
                            <div class="body">
                                <div class="header">
                                    <h2 style="text-align: center;">
                                        HOURS LEAVE
                                    </h2>
                                </div>
                                <div class="table-responsive">
                                    <!--  ************************************Half Day****************************************** -->
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                
                                                <th class="view">Date</th>
                                                <th class="view">Hour</th>
                                                <th class="view">Priority</th>
                                                <th class="view">Title</th>
                                                <th class="view">Approval</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {        
            $res=mysqli_query($con,"Select hdd,hour,priority,title,approval from  leavedb where day='halfday' and email='$email'");      
         while($r=mysqli_fetch_row($res))
         {            
          echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 //echo $r[0];die;
                
                 echo "<td alig='center' width=''> $r[1]</td>";
                 echo "<td alig='center' width=''> $r[2]</td>";
                 echo "<td alig='center' width=''> $r[3]</td>";
                 
                   if (empty($r[4])) {
                    echo "<td>

<span style='width: 50% !important;margin-left: 30%;' class='btn bg-blue waves-effect'>

      <i class='material-icons'>report_problem</i>
      <b style='color: white !important;';>Pending</b></span>

        </td>";
                 }else{
                 echo "<td alig='center' width=''> $r[4]</td>";
              }
                 echo "</tr>";
        }
    }
 
?>
                                        </tbody>
                                    </table>
                                    <div class="header">
                                        <h2 style="text-align: center;">
                                            SINGLE DAY LEAVE
                                        </h2>
                                    </div>
                                    <!--  ************************************Full Day****************************************** -->
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                
                                                <th class="view">Date</th>
                                                <th class="view">Priority</th>
                                                <th class="view">Title</th>
                                                <th class="view">Approval</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {        
            $res=mysqli_query($con,"Select sdd,priority,title,approval from  leavedb where day='singleday' and email='$email'");
       
         while($r=mysqli_fetch_row($res))
         {
             
          echo "<tr>";
                
                 //echo $r[0];die;
               
                 echo "<td alig='center' width=''> $r[0]</td>";
                 echo "<td alig='center' width=''> $r[1]</td>";
                 echo "<td alig='center' width=''> $r[2]</td>";
                  if (empty($r[3])) {
                    echo "<td>

<span style='width: 50% !important;margin-left: 30%;' class='btn bg-blue waves-effect'>

      <i class='material-icons'>report_problem</i>
      <b style='color: white !important;';>Pending</b></span>

        </td>";
                 }else{
                 echo "<td alig='center' width=''> $r[3]</td>";
              }
                 echo "</tr>";
        }
    }
 
?>
                                        </tbody>
                                    </table>
                                    <div class="header">
                                        <h2 style="text-align: center;">
                                            MULTIPLE DAY LEAVE
                                        </h2>
                                    </div>
                                    <!--  **************************************Multiple Day*********************************** -->
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                               
                                                <th class="view">Date From</th>
                                                <th class="view">Date To</th>
                                                <th class="view">Priority</th>
                                                <th class="view">Title</th>
                                                <th class="view">Approval</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {        
            $res=mysqli_query($con,"Select dd,dd1,priority,title,approval from  leavedb where day='multipleday' and email='$email'");
       
         while($r=mysqli_fetch_row($res))
         {
             
          echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 //echo $r[0];die;
                 echo "<td alig='center' width=''> $r[1]</td>";
                 echo "<td alig='center' width=''> $r[2]</td>";
                 echo "<td alig='center' width=''> $r[3]</td>";
            
                   if (empty($r[4])) {
                    echo "<td>

<span style='width: 50% !important;margin-left: 30%;' class='btn bg-blue waves-effect'>

      <i class='material-icons'>report_problem</i>
      <b style='color: white !important;';>Pending</b></span>

        </td>";
                 }else{
                    
                 echo "<td alig='center' width=''> $r[4]</td>";
              }
                 echo "</tr>";
        }
    }
 
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->
                <!-- Exportable Table -->
                <!-- #END# Exportable Table -->
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
        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>
        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/forms/advanced-form-elements.js"></script>
        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
    </body>
    </html>