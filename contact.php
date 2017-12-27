<!DOCTYPE html>
<html>

<?php include "templates/header.php";?>   

<body class="theme-red">
    <!-- Page Loader -->
   <?php include "templates/pageloader.php";?>   
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
             <?php include "templates/userInfonew.php";?> 
            <!-- #User Info -->
            <!-- Menu -->
            <?php include "templates/menu.php";?>
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
      <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

                    <div class="card col-xs-8 col-sm-8 col-md-8 col-lg-8" >
                        <div class="header">
                             <div class="header" style="background-color: #673AB7;">
                                    <h2 style="text-align: center;color: #ffffff;">
                                QUICK CONTACT
                            </h2>
                                </div>
                            
                        </div>
                        <div class="body">
                        <form id="" method="POST" action="">
                   

                    <div class="input-group">
                        
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Name" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>




                    <div class="input-group">
                       
                        <div class="form-line">
                            <input type="text" class="form-control" name="no" placeholder="Contact Number" required autofocus>
                        </div>
                    </div>

                        <div class="input-group">
                        
                        <div class="form-line">
                            <textarea  class="form-control" placeholder="Type your Message Here...." tabindex="5" rows="4" cols="80" required autofocus></textarea>
                        </div>
                    </div>






                    <button style="width: 100%;" class="btn1 bg-deep-purple waves-effect " type="submit">Send</button>

                   
                </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>


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