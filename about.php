<!DOCTYPE html>
<html>

<?php include ("templates/header.php"); ?>
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
    <?php include ("templates/top.php"); ?>    
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
    <?php include ("templates/userInfonew.php"); ?>            
            <!-- #User Info -->
            <!-- Menu -->
        
    <?php include ("templates/menu.php"); ?>
            <!-- #Menu -->
            <!-- Footer -->
     <?php include ("templates/footer.php"); ?>        
            <!-- #Footer -->
        </aside>

    </section>

   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2 >ABOUT US</h2>
            </div>
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                OUR HISTORY
                            </h2>
                        </div>
                        <div class="body">
                            <p>
                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                            </p>
                            <p>
                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            
            
            <!-- Unordered List -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                               STORY
                            </h2>
                            
                        </div>
                        <div class="body" style="color:#ffffff;background-color: #ff3b3e;">
                        <p style="text-align: justify;padding-bottom: 90px;">The exciting tastes of international cuisine in a superb interior of our newly opened Brooklyn gastro bar. The newly gentrified neighbourhood offers beautiful views.
Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round. Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round. Sometimes the simplest things. Sometimes the things are the hardest to find. So we created a new line for everyday life, All Year Round. Sometimes the simplest things are the</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           <h2 style="text-align: center;">
                                ORDERED LIST
                            </h2>   
                        </div>
                        <div class="body" style="color:#ffffff;background-color: #ff3b3e;>
                           <a href="images/about.jpg" >
                            <img class="img-responsive thumbnail" src="images/about.jpg">
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        <!-- #END# Unordered List -->
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