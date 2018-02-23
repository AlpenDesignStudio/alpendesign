
<?php 
session_start();
 $dpt = $_SESSION['dpt'];
 $email = $_SESSION['email'];
 $fullname = $_SESSION['fullname'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ADSL | Alpen Design Studio</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
   <?php //include "templates/pageloader.php";?>   
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
  <?php include "templates/top.php";?>  
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
         <?php if($dpt == 'Admin'){
         include('pages/admin/userInfo_admin.php');
        }
        if($dpt == 'HR'){
            include('pages/hr/userInfo_hr.php');
        }
        if($dpt == 'Technical'){
            include('pages/tech/userInfo_tech.php');
        }
        if($dpt == 'Legal'){
            include('pages/legal/userInfo_legal.php');
        }
        if($dpt == 'Marketing'){
            include('pages/marketing/userInfo_marketing.php');
        }
        if($dpt == 'Creative'){
            include('pages/creative/userInfo_creative.php');
        }
        ?>
     
            <!-- #User Info -->
            <!-- Menu -->
        <?php if($dpt == 'Admin'){
            include('templates/admin_menu.php');
             //include('pages/admin/admin11.php');
        }
        if($dpt == 'HR'){
            include('templates/hr_menu.php');
        }
        if($dpt == 'Technical'){
            include('templates/tech_menu.php');
        }
        if($dpt == 'Legal'){
            include('templates/legal_menu.php');
        }
        if($dpt == 'Marketing'){
            include('templates/marketing_menu.php');
        }
        if($dpt == 'Creative'){
            include('templates/creative_menu.php');
        }
        ?>
            <!-- #Menu -->
            <!-- Footer -->
              <?php include "templates/footer.php";?>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    <?php include "templates/rightSidebar.php";?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>WELCOME :: <b><?php echo $fullname; ?></b></h2>
            </div>

            <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect" type="button">
                        <div class="icon">
                            <i class="material-icons">lock</i>
                        </div>
                        <div class="content">
                            <div class="text">LOGIN</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect" type="button">
                        <div class="icon">
                            <i class="material-icons">lock</i>
                        </div>
                        <div class="content">
                            <div class="text">LOGOUT</div>
                        </div>
                    </div>
                </div>

                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                           <div class="m-b--35 font-bold">
                         
                          

<?php
include "check.php";
$user = $_SESSION['email'];
$res=mysqli_query($con,"select * from profile  where user='$user'");
$pics=$res->fetch_assoc();
 echo "<img src='pages/upload/$pics[url]' height='100%' width='100%'/>";
?>
</div>
                        </div>
                    </div>
                </div>




            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">HR</div>
                            <div class="number count-to" data-from="0" data-to="<?php
                include 'check.php';
                $res=mysqli_query($con,"SELECT count(*) from  register where dpt='HR'");
                while($r=mysqli_fetch_row($res))
                 { echo "".$r[0]."";}?>" 
                data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Technical </div>
                            <div class="number count-to" data-from="0" data-to="<?php
                include 'check.php';
                $res=mysqli_query($con,"SELECT count(*) from  register where dpt='Technical'");
                while($r=mysqli_fetch_row($res))
                 { echo "".$r[0]."";}?>" " data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Legal</div>
                            <div class="number count-to" data-from="0" data-to="<?php
                include 'check.php';
                $res=mysqli_query($con,"SELECT count(*) from  register where dpt='Legal'");
                while($r=mysqli_fetch_row($res))
                 { echo "".$r[0]."";}?>" " data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Marketing</div>
                            <div class="number count-to" data-from="0" data-to="<?php
                include 'check.php';
                $res=mysqli_query($con,"SELECT count(*) from  register where dpt='Marketing'");
                while($r=mysqli_fetch_row($res))
                 { echo "".$r[0]."";}?>" " data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
       
  <div class="row clearfix">
                <!-- holiday -->
                 <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                   <div class="card">
                        <div class="header" style="background-color: #FF932D;text-align: center;">
                            <h2 style="color: #ffffff;">
                                 HOLIDAYS
                            </h2>
                        </div>
                        <?php include "check.php"; ?>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr> 
                                         <th class="view"> Leave Category</th>
                                           <th class="view"> From</th>
                                            <th class="view"> To</th>
                                            <th class="view"> Cause</th> 
                                            
                                         
                                        </tr>
                                    </thead>
                             
                                    <tbody>

 <?php
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {        
            $res=mysqli_query($con,"Select leave_cat,leave_date,leave_datee,leave_cause from   holidays");

       
         while($r=mysqli_fetch_row($res))
         {
             
          echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 //echo $r[0];die;
                 echo "<td alig='center' width=''> $r[1]</td>";
                  echo "<td alig='center' width=''> $r[2]</td>";
                   echo "<td alig='center' width=''> $r[3]</td>";
                   

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
                <!-- END -->
      
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                           <div class="m-b--35 font-bold">YOUR ALL LEAVES</div>
                         <ul class="dashboard-stat-list">
                                <li>
                                    TOTAL LEAVE
                                    <span class="pull-right"><b>21</b> <small>DAYS</small></span>
                                </li>
                                <li>
                                    LEAVE TAKEN
                                    <span class="pull-right"><b>
                                        <?php
                include 'check.php';
        $res=mysqli_query($con,"SELECT count(*) from leavedb where email='$email'");

while($r=mysqli_fetch_row($res))
         { 

                 echo "".$r[0]."";        
        }

                ?>
                                    </b> <small>DAYS</small></span>
                                    

                                </li>
                                <li>
                                    PENDING LEAVES
                                    <span class="pull-right"><b>
                                        <?php
                include 'check.php';
        $res=mysqli_query($con,"SELECT count(*) from leavedb where email='$email'");

while($r=mysqli_fetch_row($res))
         { 
                $t='21';
               $a= "".$r[0]."";
                $s=$t-$a; 
                print ($s);   

        }
                   
                ?>
                                    </b> <small>DAYS</small></span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- #END# Browser Usage -->
            </div>


            <div class="row clearfix">
  
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                   <div class="card">
                        <div class="header" style="background-color: #FF932D;text-align: center;">
                            <h2 style="color: #ffffff;">
                                NOTICE
                            </h2>
                        </div>
                        <?php include "check.php"; ?>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
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
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {        
            $res=mysqli_query($con,"Select * from notice");

       
         while($r=mysqli_fetch_row($res))
         {
             
          echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 //echo $r[0];die;
                 echo "<td alig='center' width=''> $r[1]</td>";
                  echo "<td alig='center' width=''> $r[2]</td>";
                   echo "<td alig='center' width=''> $r[3]</td>";
                   

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
<!-- test -->

          
<!-- end test -->
  
        </div>
    </section>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>
$("#notice_form").on('submit',function(e) {

    // alert('test');
    // return false;
    var notice_date = $("#notice_date").val();
    var headline = $("#headline").val();
    var notice = $("#notice").val();
   

    //var comment = $("#comment").val();
    
    if(notice_date == "" &&  headline == "" && notice == "" ) {
        // $("#error_message").show().html("All Fields are Required");
    } else {
        // $("#error_message").html("").hide();
        $.ajax({
            type: "POST",
            url: "notice_db.php",
            //data: "opwd="+opwd+"&npwd="+npwd+"&cpwd="+cpwd,

            data: "notice_date="+notice_date+"&headline="+headline+"&notice="+notice,
            success: function(data){
                // $('#success_message').fadeIn().html(data);
                // setTimeout(function() {
                //     $('#success_message').fadeOut("slow");
                // }, 2000 );
                // alert('test');
            var response = JSON.parse(data);

            if(response.status == true){
                // alert('Success');
                $('.alert-success').removeClass('hidden');
                $('.alert-danger').addClass('hidden');
            }else{
                // alert('Error');
                $('.alert-success').addClass('hidden');
                $('.alert-danger').removeClass('hidden');
            }

            }

        });
    }
    e.preventDefault();
    document.getElementById("notice_form").reset();

});
</script>   
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>