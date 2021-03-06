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
        <!-- Custom Css -->
        <link href="../../css/style.css" rel="stylesheet">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/all-themes.css" rel="stylesheet" />
        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

        <!-- Bootstrap Select Css -->
        <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
       
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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="logo" style="font-size: 36px;display: block;width: 100%;text-align: center;color: #fff;padding-bottom: 2%;">
                            NOTICE <b> REGISTER </b>
                        </div>
                        <div class="card">
                            <body class="body" style="background-image: url(notice.jpg);background-repeat: no-repeat;background-size: cover;">
                                    <div class="signup-box">
                                        <div class="card">
                                            <div class="body">
                                                <form id="notice_form" action="#">
                                                    <div class="msg" style="text-align: center;padding-bottom: 2%;">Add a new Notice</div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                            <i class="material-icons">perm_contact_calendar</i>
                        </span>
                                                        <div class="form-line">
                                                            <input id="notice_date" type="date" class="form-control" placeholder="" name="notice_date" required autofocus>

                                                        </div>
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                                                        <div class="form-line">
                                                            <input id="headline" type="text" class="form-control" name="headline" placeholder="Notice headline" required autofocus>
                                                        </div>
                                                    </div>


                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                            <i class="material-icons">domain</i>
                        </span>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea id="notice" name="notice" rows="1" class="form-control no-resize auto-growth" placeholder="Notice.."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">SUBMIT</button>

                                                    <br><br>
                                                    <div id="error_message">
                                                        <div class="alert alert-danger hidden">
                                                            <strong>Oh snap!</strong> Failed To Register..Try Again..!!
                                                        </div>
                                                    </div>
                                                    <div id="success_message">
                                                        <div class="alert alert-success hidden">
                                                            <strong>Well done!</strong> You Have successfully Registered Your Account..!!
                                                        </div>
                                                    </div>


                                                </form>


                                                <div class="row m-t-15 m-b--20">
                                                    <div class="col-xs-6">
                                                        <a href="view_notice.php">All Notice</a>
                                                    </div>
                                                    <div class="col-xs-6 align-right">
                                                        <a href="../../home.php">Back to Dashboard</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                </div>
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
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
   
    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <script src="../../js/pages/examples/sign-up.js"></script>
        </body>

    </html>