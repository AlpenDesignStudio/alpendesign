<!DOCTYPE html>
<html>
 <style>
        .row1 {
            width: 112%;
            margin-right: -15px;
            /*margin-left: 75px !important;*/
            padding-top: 35px;
        }
        
        .card1 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 10%;
        }
        
        .card1:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        
        .container1 {
            padding: 2px 16px;
        }
        
        .column1 {
            float: left;
            width: 30%;
            padding: 10px;
            height: 358px;
            /* Should be removed. Only for demonstration */
        }
        /* Clear floats after the columns */
        
        .row1:after {
            content: "";
            display: table;
            clear: both;
        }
        
        #search_me {
            height: 35px;
            background: #45aed6;
            border-color: #2a95be;
            color: #fff;
            width: 108px;
        }
        
/*        input#googlesearch {
            margin-left: 254px;
            border-color: #4DAED6;
            width: 50%;
            border-width: 3px;
        }*/
    </style>
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
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Advance Search</h2>
                                </div>
                                <div  class="col-xs-12 col-sm-6">
                                    <a type="button" style="float: right;" class="btn btn-primary waves-effect" href="pages/tables/downLoaded.php">Show Downloaded Images</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="body">
                    
<!-- 
                        <button type="button" class="btn btn-primary waves-effect">Show Downloaded Images</button><br><br> -->
                         
              <!--           <input type="search" id="googlesearch" placeholder="search.....">
                         <button type="button" id="search_me" class="btn btn-warning waves-effect">Click Me!</button> -->
                         <div class="col-xs-12 col-sm-2"></div>
                         <div class="col-xs-12 col-sm-6">
                        <input type="search" id="googlesearch" class="form-control input-sm" placeholder="search....." aria-controls="DataTables_Table_0"></div>

            <button type="button" id="search_me" class="btn btn-warning waves-effect">Click Me!</button>

           <div class="row1 search_content">
          <div hidden class="column1 card1 demoCardEmpty">
            <img src="" alt="Avatar" width="100%" height="250">
            <h4></h4>
            <div class="container1">
              <a type="button" id="download" ;>Download Now !</a>
            </div>
          </div>
        </div>
                            <!-- <div id="real_time_chart" class="dashboard-flot-chart"></div> -->
                        </div>
                    </div>
                </div>
            </div>
    </section>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $('#search_me').on('click', function() {
                // $('.search_content').empty();
                $('.searchCardCloned').remove();
                var q_term = $("#googlesearch").val();
                if (q_term.length >= 3) {

                    $.ajax({
                        url: 'https://pixabay.com/api/?key=6920322-74434e60b54f0f898a499f444&q=' + q_term + '&image_type=photo',
                        method: 'GET',
                        success: function(response) {
                            var response = JSON.parse(JSON.stringify(response));
                            var search_response = response.hits;
                            console.log(search_response);
                            search_response.forEach(function(Index, i) {
                                console.log(search_response);
                                var clone = $('.demoCardEmpty').clone();
                                clone.removeAttr('hidden');
                                clone.addClass("searchCardCloned").removeClass("demoCardEmpty");
                                $('.search_content').append(clone);

                                // clone.children().eq(0).attr('src',search_response[i].pagemap.cse_image[0].src);
                                clone.children().eq(0).attr('src', search_response[i].previewURL);
                                clone.children().eq(2).children().attr('href', 'tdb.php?name=' + q_term + '&url=' + search_response[i].webformatURL + '&ext=.' + search_response[i].webformatURL.split('.').pop());
                                clone.children().eq(1).html('Dimensions:'+search_response[i].imageWidth+'*'+search_response[i].imageHeight);
                            });

                        },
                        error: function() {

                        }
                    });
                }
            });
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