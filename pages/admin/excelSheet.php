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
    <title>Uploaded Sheet</title>
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

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
                        <div class="header" style="background-color: #673AB7;">
                            <h2 style="text-align: center;color: #ffffff;">
                                UPLOADED SHEET
                            </h2>
                        </div>
                        <?php include "check.php"; ?>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th class="view"> 1</th>
                                            <th class="view"> 2</th>
                                            <th class="view"> 3</th>
                                            <th class="view"> 4</th>
                                            <th class="view"> 5</th>
                                            <th class="view"> 6</th>
                                            <th class="view"> 7</th>
                                            <th class="view"> 8</th>
                                            <th class="view"> 9</th>
                                            <th class="view"> 10</th>
                                            <th class="view"> 11</th>
                                            <th class="view"> 12</th>

                                             <th class="view"> 13</th>
                                            <th class="view"> 14</th>
                                            <th class="view"> 15</th>
                                            <th class="view"> 16</th>
                                            <th class="view"> 17</th>
                                            <th class="view"> 18</th>
                                            <th class="view"> 19</th>
                                            <th class="view"> 20</th>
                                            <th class="view"> 21</th>
                                            <th class="view"> 22</th>
                                            <th class="view"> 23</th>
                                            <th class="view"> 24</th>

                                            <th class="view"> 25</th>
                                            <th class="view"> 26</th>
                                            <th class="view"> 27</th>
                                            <th class="view"> 28</th>
                                            <th class="view"> 29</th>
                                            <th class="view"> 30</th>
                                            <th class="view"> 31</th>


                                         
                                        </tr>
                                    </thead>
                                <!--     <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                          
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                 <?php
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {        
            $res=mysqli_query($con,"Select * from excel");

       
         while($r=mysqli_fetch_row($res))
         {
            // print_r($r);die;
          echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td alig='center' width=''> $r[1]</td>";
                 echo "<td alig='center' width=''> $r[2]</td>";
                 echo "<td alig='center' width=''> $r[3]</td>";
                 echo "<td alig='center' width=''> $r[4]</td>";
                 echo "<td alig='center' width=''> $r[5]</td>";
                 echo "<td alig='center' width=''> $r[6]</td>";
                 echo "<td alig='center' width=''> $r[7]</td>";
                 echo "<td alig='center' width=''> $r[8]</td>";
                 echo "<td alig='center' width=''> $r[9]</td>";
                 echo "<td alig='center' width=''> $r[10]</td>";
                 echo "<td alig='center' width=''> $r[11]</td>";

                 echo "<td alig='center' width=''> $r[12]</td>";
                 echo "<td alig='center' width=''> $r[13]</td>";
                 echo "<td alig='center' width=''> $r[14]</td>";
                 echo "<td alig='center' width=''> $r[15]</td>";
                 echo "<td alig='center' width=''> $r[16]</td>";
                 echo "<td alig='center' width=''> $r[17]</td>";
                 echo "<td alig='center' width=''> $r[18]</td>";
                 echo "<td alig='center' width=''> $r[19]</td>";
                 echo "<td alig='center' width=''> $r[20]</td>";
                 echo "<td alig='center' width=''> $r[21]</td>";
                 echo "<td alig='center' width=''> $r[22]</td>";

                 echo "<td alig='center' width=''> $r[23]</td>";
                 echo "<td alig='center' width=''> $r[24]</td>";
                 echo "<td alig='center' width=''> $r[25]</td>";
                 echo "<td alig='center' width=''> $r[26]</td>";
                 echo "<td alig='center' width=''> $r[27]</td>";
                 echo "<td alig='center' width=''> $r[28]</td>";
                 echo "<td alig='center' width=''> $r[29]</td>";
                 echo "<td alig='center' width=''> $r[30]</td>";
              


                 // echo "<td alig='center' width=''><img class='btn popup_image' height='100' width='100' src='".$r[2]."'></td>";
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

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>