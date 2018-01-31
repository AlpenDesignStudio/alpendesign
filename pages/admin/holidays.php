<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Add Holidays</title>
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

     <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

     <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

</head>

<body class="signup-page" style="background-image: url(leave.jpg)" ;>
    <div class="signup-box">
      <div class="logo">
        <a href="javascript:void(0);">Holiday <b>Register</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>
        <div class="card">
            <div class="body" style="box-shadow: 0 4px 8px 0 rgb(108, 136, 163), 0 6px 20px 0 rgb(109, 139, 167);border: 1px solid #e92163;">
                <form id="sign_up" name="contact-form" method="POST" action="holidaysdb.php">
                    <div class="msg">Add a new Holiday</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">favorite</i>
                        </span>
                        <div class="form-line">
                        <select id="select" name="leave_cat" class="form-control show-tick">
                        <option value="">Please select Category</option>
                        <option value="Hindus" >Hindus</option>
                        <option value="Muslim" >Muslim</option>
                        <option value="Catholic" >Catholic</option>
                        </select>
                        </div>
                    </div>
                  
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">toys</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="leave_cause" placeholder="Occasion " required autofocus>
                        </div>
                    </div>
                
                    <p><b>Duration from*</b></p>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">date_range</i>
                        </span>

                    <div class="form-line">
                       <input type="date" class="form-control" placeholder="Date Of Occasion" name="leave_date" required>
                    </div>
                    </div>

                    <p><b>Duration to*</b></p>
                    <div class="input-group">

                        <span class="input-group-addon">

                            <i class="material-icons">date_range</i>
                        </span>
                                        <div class="form-line">
                                        <input type="date" class="form-control" placeholder="Date Of Occasion" name="leave_datee" required>
                                          
                                        </div>
                    </div>
                  

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit"> ADD</button>

            
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="viewholidays.php">All Holidays</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="../../home.php">Back to Dashboard</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>







     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

      <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <!-- Custom Js -->
   
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>