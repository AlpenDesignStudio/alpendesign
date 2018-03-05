<?php
session_start();
include "check.php";
$fullname = $_SESSION['fullname']; 
$email = $_SESSION['email']; 
?>
    <!DOCTYPE html>
    <html>
    <head>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title> View Payroll</title>
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
        <!-- Page Loader -->
   <!--      <div class="page-loader-wrapper">
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
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header" style="background-color: #673AB7;">
                                <h2 style="text-align: center;color: #ffffff;">
                                    VIEW PAYROLL
                                </h2>
                            </div>
                            <div class="body">
                            
                                <div class="table-responsive">
                                    
                                    <?php 

include "check.php";
if(isset($_GET['action'])) {
    $id = $_GET['id'];

    $sql =mysqli_query($con,"DELETE FROM payroll WHERE id = '$id'");

    if ($sql) {
    
          echo " <div class='alert alert-success'>
          <strong>Well done! </strong> You Have successfully Deleted Payroll Entry..!!</div>";  
        }
        // else{
        //   echo "<div class='alert alert-danger'>
        //   <strong>Not Deleted</strong></div>";
        // }
    
    // else{
    //   echo "Error: " . $sql . "<br>" . mysqli_error($con);
    // }
}
?>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <!-- <th class="view">Full Name</th> -->
                                                <!-- <th class="view">Department</th> -->
                                                <th class="view">email</th>
                                                <!-- <th class="view">position</th> -->
                                                <th class="view">init</th>
                                                <th class="view">Basic Pay</th>
                                                 <th class="view">Days Worked</th> 
                                          <th class="view">Overtime Rate/Hr</th>
                                          <th class="view">OT Hours </th>
                                          <th class="view">Allowances</th>
                                          <th class="view">Gross Pay</th>
                                           <th class="view">W/Tax </th>
                                          <th class="view">Advances</th>
                                          <th class="view">Insurance</th>
                                          
                                          <th class="view">Total Deductions</th>
                                          <th class="view">Net Pay</th>
                                          <th class="view">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
// connect to the database
include('connect-db.php');


// get the records from the database
if ($result = $mysqli->query("SELECT *  FROM payroll"))
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

 $gross = ($row->pay * $row->dayswork) + ($row->otrate * $row->others) + $row->allow;

  if ($gross>=50000)
   $tax = $gross * .15;
  if ($gross>=30000 && $gross <=49999)
   $tax = $gross * .10;
  if ($gross>=10000 && $gross <=29999)
   $tax = $gross * .05;
  if ($gross>=5000 && $gross <=9999)
   $tax = $gross * .03;
  if ($gross < 5000)
    $tax = 0;
    
  $totdeduct = $tax + $row->advances + $row->insurance;
  $netpay = $gross - $totdeduct;

$id=$row->id;
    
// set up a row for each record
echo "<tr>";
//echo "<td>" . $row->fullname . "</td>";
// echo "<td>" . $row->dpt . "</td>";
echo "<td>" . $row->email . "</td>";
// echo "<td>" . $row->position . "</td>";
echo "<td>" . $row->init . "</td>";
echo "<td>" . $row->pay . "</td>";
echo "<td>" . $row->dayswork . "</td>";
echo "<td>" . $row->otrate . "</td>";
echo "<td>" . $row->others . "</td>";
echo "<td>" . $row->allow . "</td>";
echo "<td>" . $gross . "</td>";
 echo '<td>'.$tax.'</td>'; 
echo "<td>" . $row->advances . "</td>";
echo "<td>" . $row->insurance . "</td>";
echo "<td>" . $totdeduct . "</td>";
echo "<td>" . $netpay . "</td>";
echo "<td>


<a href='payroll.php?id=".$id."'>
<button style='width:  !important;' type='submit' class='btn bg-green waves-effect'>
     <i class='material-icons'>check</i>
      </button></a>

<form action='?action=submit&id=$id' method='post'>
<button style='width:  !important;' type='submit' class='btn bg-red waves-effect'>
      <i class='material-icons'>close</i>
      </button>

      </form>
      </td>";

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
$mysqli->close();
?>
</tbody>
</table>
</div>
<!-- #END# HOUR DAY  -->

                             
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
        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>
        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
    </body>
    </html>