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
        <title>Annual Performance</title>
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
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="card">
                            <div class="body">
                                <div class="header" style="background-color: #673AB7;text-align: center;">
                                    <h2 style="color: #ffffff;">
                                        ANNUAL PERFORMANCE
                                    </h2>
                                </div>

                                 <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th class="view">1</th>
                                                <th class="view">2</th>
                                                <th class="view">3</th>
                                                <th class="view">4</th>
                                                <th class="view">5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <td class="view">Poor</td>
                                                <td class="view">Fair</td>
                                                <td class="view">Acceptable</td>
                                                <td class="view">Good</td>
                                                <td class="view">Excellent</td>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="body">
                                    <form id="appr" action="#">
                                        <div class="msg" style="text-align: center;padding-bottom: 2%;">Rate your self on 5 ie 5 will be the highest rating and 1 will be the lowest !!</div>

                                        <p>Dependability</p>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">line_weight</i>
                                            </span>
                                            <div class="form-line">
                                                <select id="dep" name="dep" class="form-control show-tick" required>
                                                <option value="">Please select your value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>

                                      <p>Initiative</p>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">line_weight</i>
                                            </span>
                                            <div class="form-line">
                                                <select id="ini" name="ini" class="form-control show-tick" required>
                                                <option value="">Please select your value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <p>Attendance</p>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">line_weight</i>
                                            </span>
                                            <div class="form-line">
                                                <select id="att" name="att" class="form-control show-tick" required>
                                                <option value="">Please select your value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <p>Attitude</p>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">line_weight</i>
                                            </span>
                                            <div class="form-line">
                                                <select id="atti" name="atti" class="form-control show-tick" required>
                                                <option value="">Please select your value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>

                                       <p>Co-operation</p>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">line_weight</i>
                                            </span>
                                            <div class="form-line">
                                                <select id="opp" name="opp" class="form-control show-tick" required>
                                                <option value="">Please select your value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>

                                         <p>Overall Output</p>
                                         <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">line_weight</i>
                                            </span>
                                            <div class="form-line">
                                                <select id="o" name="o" class="form-control show-tick" required>
                                                <option value="">Please select your value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button class="btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">SUBMIT</button>

                                        <br><br>
                                        <div id="error_message">
                                            <div class="alert alert-danger hidden">
                                                <strong>Oh snap!</strong> Failed To Add data..Try Again..!!
                                            </div>
                                        </div>
                                        <div id="success_message">
                                            <div class="alert alert-success hidden">
                                                <strong>Well done!</strong> You Have successfully Added your Activity!!
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>
$("#appr").on('submit',function(e) {

    // alert('test');
    // return false;
    var dep  =  $("#dep").val();
    var ini  =  $("#ini").val();
    var att  =  $("#att").val();
    var atti  =  $("#atti").val();
    var opp  =  $("#opp").val();
    var o  =  $("#o").val();
   
    
    if( dep == "" && ini == "" && att == "" && atti == "" && opp == "" && o == "") {
        
    } else {
       
        $.ajax({
            type: "POST",
            url: "appraisal_db.php",

            data: "&dep="+dep+"&ini="+ini+"&att="+att+"&atti="+atti+"&opp="+opp+"&o="+o,
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
    document.getElementById("appr").reset();

});
</script>   

        <!-- Jquery Core Js -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>
        <!-- Slimscroll Plugin Js -->
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- Bootstrap Notify Plugin Js -->
        <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>
        <!-- SweetAlert Plugin Js -->
        <script src="../../plugins/sweetalert/sweetalert.min.js"></script>
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