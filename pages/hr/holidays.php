<?php
session_start();
include "check.php";
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
        <!-- <div class="page-loader-wrapper">
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
        </div> -->
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
                            <div class="body">
                            <div class="header" style="background-color: #673AB7;text-align: center;">
                                <h2 style="color: #ffffff;">
                                    HOLIDAYS
                                </h2></div>

                                <div class="header">
                                    <h2 style="text-align: center;">
                                        SINGLE DAY HOLIDAY
                                    </h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th class="view">Sr. No</th>
                                                <th class="view">Leave Category</th>
                                                <th class="view">Day</th>
                                                <th class="view">Date</th>
                                                <th class="view">Occasion</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <?php
// connect to the database
include('check.php');

$day='singleday';

// get the records from the database
if ($result = mysqli_query($con,"SELECT * FROM holidays WHERE day='$day' " ))

    /*$res=mysqli_query($con,"Select sr,uname,dpt,date,start_time,end_time,date from timesheet");*/
    //SELECT DATE_FORMAT(leave_date, '%m/%d/%Y ') FROM holidays;
    //ROW SET leave_date  = DATE_FORMAT(NOW(), '%d-%m-%Y');
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
// echo "<table border='1' cellpadding='10'>";

// set table headers
// echo "<tr><th>ID</th><th>;Leave Date</th><th>Leave Cause</th><th>Actions</th><th></th></tr>";

while ($row = $result->fetch_object())
{

$sdd=date('d-m-Y ',strtotime($row->sdd));
   
// set up a row for each record
echo "<tr>";

echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->leave_cat . "</td>";
echo "<td>" . $row->day . "</td>";
echo "<td>" . $row->sdd . "</td>";
echo "<td>" . $row->leave_cause . "</td>";

// echo "<td><a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
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


?>
                                        </tbody>



                                    </table>
                                </div>

                                <div class="header">
                                    <h2 style="text-align: center;">
                                        MULTIPLE DAY HOLIDAY
                                    </h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th class="view">Sr.No</th>
                                                <th class="view">Leave Category</th>
                                                <th class="view">Day</th>
                                                <th class="view">From</th>
                                                <th class="view">To</th>
                                                <th class="view">Occasion</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <?php
// connect to the database
include('check.php');

$day='multipleday';

// get the records from the database
if ($result = mysqli_query($con,"SELECT * FROM holidays WHERE day='$day' " ))
    //SELECT DATE_FORMAT(leave_date, '%m/%d/%Y ') FROM holidays;
    //ROW SET leave_date  = DATE_FORMAT(NOW(), '%d-%m-%Y');
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
// echo "<table border='1' cellpadding='10'>";

// set table headers
// echo "<tr><th>ID</th><th>;Leave Date</th><th>Leave Cause</th><th>Actions</th><th></th></tr>";

while ($row = $result->fetch_object())
{

$dt=date('d-m-Y ',strtotime($row->leave_date));
$dtt=date('d-m-Y ',strtotime($row->leave_datee ));
    
// set up a row for each record
echo "<tr>";

echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->leave_cat . "</td>";
echo "<td>" . $row->day . "</td>";
echo "<td>" . $dt . "</td>";
echo "<td>" . $dtt . "</td>";
echo "<td>" . $row->leave_cause . "</td>";

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


?>
                                        </tbody>



                                    </table>
                                </div>                                
                            </div>

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