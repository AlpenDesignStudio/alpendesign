<?php session_start();


// connect to the database
include('check.php');

$email='admin@gmail.com';

// get the records from the database
if ($result = mysqli_query($con,"SELECT * FROM payroll WHERE email = '$email'")){
    //SELECT DATE_FORMAT(leave_date, '%m/%d/%Y ') FROM holidays;
    //ROW SET leave_date  = DATE_FORMAT(NOW(), '%d-%m-%Y');

    // display records if there are records to display
    if ($result->num_rows > 0){
        // print_r($result);

        // $row = $result->fetch_object();
        $row = mysqli_fetch_assoc($result); 
    // print_r($row);
    }
}else{
echo "No results to display!";
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Salary Slip</title>
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

    <!-- Sweet Alert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

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
         

           
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="row clearfix">

                                 <div class="row clearfix">
                                <div class="col-md-3">
                                    <div class="form-group">
                                      <!--  Nothing -->
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        
                                            <img src="../../images/logo.png" 
                                            style="height: 50px;width: auto;margin-left: 32%;" >
                                            <h4 style="text-align: center;">ALPEN DESIGN STUDIO (INDIA) PVT. LTD.</h4>
                                            <p style="text-align: center;">
                                            A - 713, 7th Floor, Raikar Chamber Premises
                                            Govandi (E), Mumbai – 400 088.
                                            </p>

                                           
                                     
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                             <!--  Nothing -->
                                    </div>
                                </div>
                            </div>

                             <div class="row clearfix">
                               
                                <div class="col-md-8">
                                    <div class="form-group">

                                            <input type="text" class="form-control" placeholder="" value="Employee Name:<?php

                                             echo $row['name']; ?> " readonly>

                                            <input type="text" class="form-control" placeholder="" value="Designation :<?php

                                             //echo $des; ?> " readonly>


                                            <input type="text" class="form-control" placeholder="" value="Month & Year : <?php

                                             //echo $M/Y; ?> " readonly>

                                    </div>


                                </div>
                              
                            </div>

                             <div class="table-responsive">

<?php 
// include "check.php";
// if(isset($_GET['action'])) {
//     $id = $_GET['id'];
    
//  if($_GET['action'] =='submit1'){
//     $sql =mysqli_query($con,"DELETE FROM holidays WHERE id = '$id'");
//   }  
// }
?>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                          
                                                <th class="view">Earnings</th>
                                                <th class="view"></th>
                                                <th class="view">Deductions</th>
                                                <th class="view"></th>
                                          
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <?php
// }
// connect to the database
// include('connect-db.php');

// $email='admin@gmail.com';

// get the records from the database
// if ($result = $mysqli->query("SELECT * FROM payroll WHERE email='$email' " ))
//     //SELECT DATE_FORMAT(leave_date, '%m/%d/%Y ') FROM holidays;
//     //ROW SET leave_date  = DATE_FORMAT(NOW(), '%d-%m-%Y');
// {
// display records if there are records to display
// if ($result->num_rows > 0)
// {
// print_r($row);


$id= $row['id'];

 $dd= date('d-m-Y ',strtotime($row['dd']));
 echo $dd;
   
// set up a row for each record
echo "<tr>";
$a="Cost to Company (CTC)";
$t="Total Addition";
//$Salary='18,000';
$Professional='Professional Tax';
$amt='200';
$s=' ';
$netsal='NET Salary';
$netpay= '17,800.00';
$salary = ($row['pay'] * $row['dayswork']) + ($row['otrate'] * $row['others']) + ($row['allow']);

// echo "<td>" . $row->id . "</td>";
//echo "<td>" . $row->fullname . "</td>";
echo "<td>" . $a . "</td>";
echo "<td>" . $salary . "</td>";
echo "<td> Professional </td>";
echo "<td>" . $salary . "</td>";


echo "</tr>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";

echo "</tr>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";

echo "</tr>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";
echo "<td>" . $s . "</td>";

echo "</tr>";
echo "<td>" . $t . "</td>";
echo "<td>" . $s . "</td>";
echo "<td>" . $t . "</td>";
echo "<td>" . $amt . "</td>";

echo "</tr>";
echo "<td>" . $s . "</td>";
echo "<td>" . $salary . "</td>";
echo "<td>" . $netsal . "</td>";
echo "<td>" . $netpay . "</td>";



echo "</table>";

// if there are no records in the database, display an alert message

// }
// // show an error if there is an issue with the database query
// else
// {
// echo "Error: " . $mysqli->error;
// }

// close database connection
// $mysqli->close();

?>
                                        </tbody>



                                    </table>
                                </div>
                                <div class="row clearfix">
                               
                                <div class="col-md-8">
                                    <div class="form-group">

                                <p><b>Six Thousand and Four Hundred Rupees Only.</b> <br> 
                                    <b>Name of Bank: </b> ICICI BANK (NEFT TRANSFER)<br>
                                    <b>Date: </b> 3rd October 2017. <br>
                                    
</p>

                                    </div>


                                </div>
                              
                            </div>





                             
                            </div>

                            


                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
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