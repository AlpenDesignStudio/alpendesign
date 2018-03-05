<?php
session_start();

$fname = $_SESSION['fname']; 
$email = $_SESSION['email']; 
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title></title>
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
   <!--  <div class="page-loader-wrapper">
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
          
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SHEET
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <?php 
require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_config1.php');
    
if(isset($_POST['Submit'])){

    $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
    if(in_array($_FILES["file"]["type"],$mimes)){

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        $uploadFilePath = 'uploads1/'.basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

        $Reader = new SpreadsheetReader($uploadFilePath);
        $totalSheet = count($Reader->sheets());

            // echo "You have total ".$totalSheet." sheets"; 


                        ?>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                       <?php 
                                        

                                        
        $html="";
        $html.="<tr>
        <th>1</th><th>2</th>
        <th>3</th><th>4</th>
        <th>5</th><th>6</th>
        <th>7</th><th>8</th>
        <th>9</th><th>10</th>

        <th>11</th><th>12</th>
        <th>13</th><th>14</th>
        <th>15</th><th>16</th>
        <th>17</th><th>18</th>
        <th>19</th><th>20</th>
        <th>21</th><th>22</th>
        <th>23</th><th>24</th>

        <th>25</th>
        <th>26</th><th>27</th>
        <th>28</th><th>29</th>
        <th>30</th><th>31</th>


        </tr>";

                                           
                                         
                                     ?>
                                      
                                    </thead>
                                
                                    <tbody>
     <?php

include "check.php";
/* For Loop for all sheets */
        for($i=0;$i<$totalSheet;$i++){

            $Reader->ChangeSheet($i);
            foreach ($Reader as $Row)
            {
                $html.="<tr>";
               
                /* Check If sheet not emprt */
                $a = isset($Row[0]) ? $Row[0] : '';
                $b = isset($Row[1]) ? $Row[1] : '';
                $c = isset($Row[2]) ? $Row[2] : '';
                $d = isset($Row[3]) ? $Row[3] : '';
                $e = isset($Row[4]) ? $Row[4] : '';
                $f = isset($Row[5]) ? $Row[5] : '';
                $g = isset($Row[6]) ? $Row[6] : '';
                $h = isset($Row[7]) ? $Row[7] : '';
                $i = isset($Row[8]) ? $Row[8] : '';
                $j = isset($Row[9]) ? $Row[9] : '';
                $k = isset($Row[10]) ? $Row[10] : '';

                $l = isset($Row[11]) ? $Row[11] : '';
                $m = isset($Row[12]) ? $Row[12] : '';
                $n = isset($Row[13]) ? $Row[13] : '';
                $o = isset($Row[14]) ? $Row[14] : '';
                $p = isset($Row[15]) ? $Row[15] : '';
                $q = isset($Row[16]) ? $Row[16] : '';
                $r = isset($Row[17]) ? $Row[17] : '';
                $s = isset($Row[18]) ? $Row[18] : '';
                $t = isset($Row[19]) ? $Row[19] : '';
                $u = isset($Row[20]) ? $Row[20] : '';
                $v = isset($Row[21]) ? $Row[21] : '';

                $w = isset($Row[22]) ? $Row[22] : '';
                $x = isset($Row[23]) ? $Row[23] : '';
                $y = isset($Row[24]) ? $Row[24] : '';
                $z = isset($Row[25]) ? $Row[25] : '';
                $aa = isset($Row[26]) ? $Row[26] : '';
                $bb = isset($Row[27]) ? $Row[27] : '';
                $cc = isset($Row[28]) ? $Row[28] : '';
                $dd = isset($Row[29]) ? $Row[29] : '';
                $ee = isset($Row[30]) ? $Row[30] : '';
              
         

                $html.="<td>".$a."</td>";
                $html.="<td>".$b."</td>";
                $html.="<td>".$c."</td>";
                $html.="<td>".$d."</td>";
                $html.="<td>".$e."</td>";
                $html.="<td>".$f."</td>";
                $html.="<td>".$g."</td>";
                $html.="<td>".$h."</td>";
                $html.="<td>".$i."</td>";
                $html.="<td>".$j."</td>";
                $html.="<td>".$k."</td>";

                $html.="<td>".$l."</td>";
                $html.="<td>".$m."</td>";
                $html.="<td>".$n."</td>";
                $html.="<td>".$o."</td>";
                $html.="<td>".$p."</td>";
                $html.="<td>".$q."</td>";
                $html.="<td>".$r."</td>";
                $html.="<td>".$s."</td>";
                $html.="<td>".$t."</td>";
                $html.="<td>".$u."</td>";
                $html.="<td>".$v."</td>";

                $html.="<td>".$w."</td>";
                $html.="<td>".$x."</td>";
                $html.="<td>".$y."</td>";
                $html.="<td>".$z."</td>";
                $html.="<td>".$aa."</td>";
                $html.="<td>".$bb."</td>";
                $html.="<td>".$cc."</td>";
                $html.="<td>".$dd."</td>";
                $html.="<td>".$ee."</td>";
         

               $html.="</tr>";

    $query=mysqli_query($con,"insert into excel(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,aa,bb,cc,dd,ee) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."','".$y."','".$z."','".$aa."','".$bb."','".$cc."','".$dd."','".$ee."')");
      // echo $query;die();
                // $mysqli->query($query);
            }

        }
        ?>

          
                                      
                                    </tbody>
 
       
                                    <?php

        $html.="</table>";
        echo $html;
        echo "<br />Data Inserted in dababase";

    }else { 
        die("<br/>Sorry, File type is not allowed. Only Excel file."); 
    }

}

?>
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