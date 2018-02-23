<?php
session_start();
//print_r($_SESSION);die();

include("check.php");

$email = $_SESSION['email']; 
$fullname = $_SESSION['fullname']; 
$no = $_SESSION['no']; 
$dpt = $_SESSION['dpt']; 
$gender = $_SESSION['gender'];
$address = $_SESSION['address']; 
$DateOfJoining = $_SESSION['doj'];

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Profile</title>

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

        <!-- Custom Css -->
        <link href="../../css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/all-themes.css" rel="stylesheet" />



        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>

        <!-- SweetAlert Plugin Js -->
        <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

  
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
                <?php include ("userInfo_hr.php"); ?>
                <!-- #User Info -->
                <!-- Menu -->

                <?php include ("../../templates/hr_menu.php"); ?>
                <!-- #Menu -->
                <!-- Footer -->
                <?php include ("../../templates/footer.php"); ?>
                <!-- #Footer -->
            </aside>

        </section>
        <section class="content">


            <div class="container-fluid">



                <div class="row clearfix" style="text-align: center;">


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">

                        <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> PROFILE
                                    </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">assignment</i>INFORMATION
                                    </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i> MESSAGES
                                    </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings</i> SETTINGS
                                    </a>
                                    </li>
                                </ul>

    <!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
  
<div class="body table-responsive">
    <table class="table table-striped">
        <thead>
            <th>DETAILS</th>
            <th></th>
        </thead>
        <tbody>
        <tr> 
            <th>DEPARTMENT</th>
            <td><?php echo $dpt;?></td>
        </tr>

        <tr>
            <th>FULL NAME</th>
            <td><?php echo $fullname;?></td>
        <tr>

        <tr>
            <th>CONTACT NO</th>
            <td><?php echo $no;?></td>
        </tr>

        <tr>
            <th>RESIDENTAL ADDRESS</th>
            <td><?php echo $address;?></td>
        </tr>

        <tr>
            <th>GENDER</th>
            <td><?php echo $gender;?></td>
        </tr>

        <tr>
            <th>EMAIL</th>
            <td><?php echo $email;?></td>
        </tr>

        <tr>
            <th>DATE OF JOINING</th>
            <td><?php echo $DateOfJoining;?></td>
        </tr>

            </tbody>
        </table>
    </div>
</div>

<!--.............................END OF TAB 1.............................-->


<div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">

<div class="body">
<form id="profile_info" action='#' >
    <table id="mainTable" class="table table-striped">
        <thead>
            <tr>
                <th style="disabled:true";>ADDITIONAL DETAILS</th>                     
            </tr>
        </thead>
        <tbody>

    <tr>
        <th>DATE OF BIRTH</th>
        <td >
            <input type="date" name="dob1" id="dob1"  > </td> 
        </td>
    </tr>
    
    <tr>
        <th>BLOOD GROUP</th>
        <td><input type="text" name="blood" id="blood" > </td> 
    </tr>
    
    <tr>
        <th>CURRENT DESIGNATION</th>
        <td><input type="text" name="designation" id="designation"  ></td>   
    </tr>

    <tr>
        <th>CURRENT SALARY</th>
        <td><input type="text" name="salary" id="salary" ></td>  
    </tr>

    <tr>
        <th>PREVIOUS COMPANY NAME</th>
        <td><input type="text" name="company" id="company" ></td>
                                        
    </tr>
    <tr>
        <th>PREVIOUS SALARY</th>
        <td><input type="text" name="prev" id="prev" ></td>
    </tr>
    <tr>
        <th>TOTAL YEAR EXPERIENCE</th>
        <td><input type="text" name="year" id="year" ></td></tr>
                                        
    </tr>

    <tr>
        <th>HIGHEST EDUCATION QUALIFICATION</th>
        <td><input type="text" name="qua" id="qua" ></td></tr>
                                        
    </tr>

    <tr>
    <th></th>
    <td><button name="submit" type="submit" class="btn btn-block btn-lg btn-success waves-effect">SUBMIT</button></td> 
                                    </tr>

                                </tbody>
                                
                            </table>

                 <br><br>
                  <div id="error_message" >
                  <div class="alert alert-danger hidden">
                  <strong>Oh Snap</strong> Failed to enter the information..!!
                  </div>
                  </div>

                  <div id="success_message">
                  <div class="alert alert-success hidden">
                  <strong>Well done!</strong> You Have successfully entered the information..!!
                  </div>
                  </div>

                </form>
            </div>
        </div>


                                    <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                        <b>Message Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius. Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas
                                            ne est, eu munere gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                        <b>Settings Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius. Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas
                                            ne est, eu munere gubergren sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>






                            <!-- #END#  -->
                        </div>

                    </div>
                </div>

            </div>
        </section>


<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>
$("#profile_info").on('submit',function(e) {

    // alert('test');
    // return false;
    var dob1 = $("#dob1").val();
    var blood = $("#blood").val();
    var designation = $("#designation").val();
    var salary = $("#salary").val();
    var company = $("#company").val();
    var prev = $("#prev").val();
    var year = $("#year").val();
    var qua = $("#qua").val();
    

    //var comment = $("#comment").val();
    
    if(dob1 == "" &&  blood == "" && designation == ""  && salary == "" &&  company == "" && prev == "" && year == "" && qua == "") {
        // $("#error_message").show().html("All Fields are Required");
    } else {
        // $("#error_message").html("").hide();
        $.ajax({
            type: "POST",
            url: "profile_db.php",
            //data: "opwd="+opwd+"&npwd="+npwd+"&cpwd="+cpwd,

            data: "dob1="+dob1+"&blood="+blood+"&designation="+designation+"&salary="+salary+"&company="+company+"&prev="+prev+"&year="+year+"&qua="+qua,
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

   
});
</script>
            <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/tables/editable-table.js"></script>


        <!-- Jquery Core Js -->
        <script src="../../plugins/jquery/jquery.min.js"></script>

        <!-- Editable Table Plugin Js -->
         <script src="../../plugins/editable-table/mindmup-editabletable.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Bootstrap Notify Plugin Js -->
        <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

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