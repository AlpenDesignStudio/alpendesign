

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Leave Application</title>
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

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Alpen<b>Design</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>

        

        <div class="card">
            <div class="body">
                <form  name="contact-form" method="POST" action="LAdb.php">
                    <div class="msg" style="color: #ffffff;background-color: #51bcd4;
                    padding: 2%;">Apply For Leave</div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">add</i>
                        </span>
                        <div class="form-line">
                            <select id="select" name="dpt" class="form-control show-tick">
                                <option value="">Please select Department</option>
                                <option value="hr">HR</option>
                                <option value="technical">Technical</option>
                                <option value="Legal">Legal</option>
                                <option value="marketing">Marketing</option>
                                <option value="creative">Creative</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">add</i>
                        </span>
                        <div class="form-line">
                            <select id="select" name="day" class="form-control show-tick">
                                <option value="">Please select session</option>
                                <option value="fullday">Full Day</option>
                                <option value="halfday">Half day</option>
                            </select>
                        </div>
                    </div>

                    <i class="material-icons" style="font-size: 20px;">add</i>
                    <label style="font-weight: 100;margin-left: 10px;">Please select Date</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                <i class="material-icons">person</i>
                </span>
                        <div class="form-line">
                            <input type="date" class="form-control" placeholder="Date Of Birth" name="dd" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <select id="select" name="priority" class="form-control show-tick">
                                <option value="">Priority of leave</option>
                                <option value="normal">Normal</option>
                                <option value="important">Important</option>
                                <option value="critical">Critical</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="title" placeholder="Reason for Leave" >
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" value="submit">SUBMIT</button>

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