<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up </title>
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

<body class="signup-page" style="background-image: url(register.jpg)" ;>
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Alpen<b>Design</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>
        <div class="card">
            <div class="body" style="box-shadow: 0 4px 8px 0 rgb(108, 136, 163), 0 6px 20px 0 rgb(109, 139, 167);border: 1px solid #e92163;">
                <form id="sign_up" name="contact-form" method="POST" action="db.php">

                    <div class="msg">Register a new Employee</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">business_center</i>
                        </span>
                        <div class="form-line">
                            <select id="dpt" name="dpt" class="form-control show-tick">
                                <option value="">Please select Department</option>
                                <option value="1">Admin</option>
                                <option value="2">HR</option>
                                <option value="3">Technical</option>
                                <option value="4">Legal</option>
                                <option value="5">Marketing</option>
                                <option value="6">Creative</option>
                            </select>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="fname" placeholder="First Name " required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person_add</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="lname" placeholder="Last Name " required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" >
                            <i class="material-icons">public</i>
                        </span>
                        <div class="form-line" class="form-control show-tick">
                            <select name="country" id="country"></select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">location_city</i>
                        </span>
                        <div class="form-line">
                            <select name="state" id="state"></select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">domain</i>
                        </span>
                        <div class="form-line">
                        <input type="text" class="form-control" name="town" placeholder="Town" required >
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">wc</i>
                        </span>
                        <div class="form-line">
                            <select id="gender" name="sex" class="form-control show-tick">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="input-group">

                        <span class="input-group-addon">
                            <i class="material-icons">perm_contact_calendar</i>
                        </span>
                        <div class="form-line">
                            <input type="date" class="form-control" placeholder="Date Of Birth" name="dob" required>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.php">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <!-- Custom Js -->

    <!-- <script src="../../js/pages/forms/basic-form-elements.js"></script> -->

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/count.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>

    <script language="javascript">
        populateCountries("country", "state");
    </script>
</body>

</html>