<?php
session_start();
//print_r($_SESSION);die();

$email = $_SESSION['email']; 
$fullname = $_SESSION['fullname']; 
$no = $_SESSION['no']; 
$dpt = $_SESSION['dpt']; 
$gender = $_SESSION['gender'];
$address = $_SESSION['address']; 
$dob = $_SESSION['dob'];  

//echo $dpt;die();

include("check.php");


if ($_POST['action']=='aa'){

$dob1 = $_POST['dob1'];  
$blood = $_POST['blood'];  
$designation = $_POST['designation'];  
$title = $_POST['title'];  
$salary = $_POST['salary']; 
$company = $_POST['company'];  
$year = $_POST['year'];  
$prev = $_POST['prev'];  
$qua = $_POST['qua'];  
 
// $query = mysqli_query($con,"INSERT INTO profile_info (dob1,blood,designation,title,salary,company,year,prev,qua) values ('$dob1','$blood','$designation','$title','$salary','$company','$year','$prev','$qua')");

   $query=mysqli_query($con,"INSERT INTO profile_info
    dob1 VALUES ('$dob1')");

if(mysqli_query($con,$query)){
    echo "SUCCESS";
}
else {
     echo "FAILED";
    }
}



?>

<!-- if(!empty($_POST)){

$sql=mysqli_query($con,"SELECT fullname,email,no,dpt,address,gender,dob FROM register where email='".$_SESSION['email']."'");

if($sql->num_rows > 0){

    while ($row = $sql->fetch_object()) {

        $fullname=$row->fullname;
        $email=$row->email;
        $no=$row->no;
        $dpt=$row->dpt;
        $address=$row->address;
        $gender=$row->gender;
        $dob=$row->dob;   
       
    }
}

if($sql->num_rows > 0){

$con=mysqli_query($con,"UPDATE register set fullname='".$_POST['fullname']."' , email='".$_POST['email']."' , dpt='".$_POST['dpt']."' , no='".$_POST['no']."' ,address='".$_POST['address']."', gender='".$_POST['gender']."' , dob='".$_POST['dob']."'  where email='".$_SESSION['email']."'");

    }
} -->

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

  
    <style type="text/css">

    form {
  &.is-readonly {
    .btn-save {
      display: none !important;
    }
    input,textarea{
      &[disabled] {
        cursor: text;
        background-color: #fff;
        border-color: transparent;
        outline-color: transparent;
        box-shadow: none;
      }
    }
  }
  &.is-editing { 
    .btn-edit{
      display: none !important;
    }
  }
}

    </style>
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
                                        <div class="body">
                                            
                                                <div class="row clearfix">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="form-label" style="margin-top: 10px;">DEPARTMENT</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="dpt" value="<?php echo $dpt;?>" readonly/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="form-label" style="margin-top: 10px;">CONTACT NO</label>

                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="no" value="<?php echo $no;?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row clearfix">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="form-label" style="margin-top: 10px;">FULL NAME</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-9">
                                                        <div class="form-line">

                                                            <input type="text" class="form-control" name="fullname" value="<?php echo $fullname;?>" readonly>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row clearfix">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="form-label" style="margin-top: 10px;">RESIDENTAL ADDRESS</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-9">
                                                        <div class="form-line">

                                                            <input type="text" class="form-control" name="address" value="<?php echo $address;?>" readonly>
                                                        </div>
                                                    </div>





                                                </div>

                                                <div class="row clearfix">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="form-label" style="margin-top: 10px;">GENDER </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="gender" value="<?php echo $gender;?>" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="form-label" style="margin-top: 10px;">EMAIL</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="email" value="<?php echo $email;?> " readonly>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row clearfix">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="form-label" style="margin-top: 10px;">DATE OF JOINING</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="dob" value="<?php echo $dob;?> " readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                        </div>
                                    </div>

                                    <!--.............................END OF TAB 1.............................-->


                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">

                                <div class="body">
                                <form class="is-readonly" id="information" method="POST" action="aa">
                                    <div class="row clearfix">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" >DATE OF BIRTH</label>
                                                           <div class="form-line"> 
                                                <input type="date" class="form-control is-disabled"  name="dob1"  disabled></div>
                                                            
                                                        </div>
                                                    </div>

                                                   <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" >BLOOD GROUP</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="blood"  disabled></div>
                                                            
                                                        </div>
                                                    </div>
                                            

                                           

                                                     <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" style="">JOB TITLE</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="title"  disabled></div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label">CURRENT DESIGNATION</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="designation"  disabled></div>
                                                            
                                                        </div>
                                                    </div>

                                                   <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" style="">CURRENT SALARY</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="salary"  disabled></div>
                                                            
                                                        </div>
                                                    </div>
                                           

                                                

                                               

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" style="">PREVIOUS COMPANY NAME</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="company"  disabled></div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" style="">TOTAL YEAR EXPERIENCE</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="year"  disabled></div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" style="">PREVIOUS SALARY</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="prev"  disabled></div>
                                                            
                                                        </div>
                                                    </div>

                                                 

                                                 


                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" style="">HIGHEST EDUCATION QUALIFICATION</label>
                                                           <div class="form-line"> 
                                                <input type="text" class="form-control is-disabled"  name="qua"  disabled></div>
                                                            
                                                        </div>
                                                    </div>
                                                 
<button type="button" class="btn btn-default btn-edit js-edit">Edit</button>
<button type="button" class="btn btn-default btn-save js-save" >Save</button>

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

        <script type="text/javascript">
            $(document).ready(function(){
        $('.js-edit, .js-save').on('click', function(){
        var $form = $(this).closest('form');
        $form.toggleClass('is-readonly is-editing');
        var isReadonly  = $form.hasClass('is-readonly');
        $form.find('input,textarea').prop('disabled', isReadonly);
      });
    });
        </script>

        <!-- Jquery Core Js -->
        <script src="../../plugins/jquery/jquery.min.js"></script>

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