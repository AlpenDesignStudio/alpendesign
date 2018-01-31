<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In</title>
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
</head>

<body class="login-page" style="background-image: url(signin.jpg)" ;>
    <div class="login-box">
        <div class="logo">
            <a href="#">Alpen<b>Design</b></a>
            <small>WELCOME TO ALPEN DESIGN</small>
        </div>
        <div class="card">
            <div class="body" style="box-shadow: 0 4px 8px 0 rgb(108, 136, 163), 0 6px 20px 0 rgb(109, 139, 167);border: 1px solid #e92163;">
                <form method="post" action="login_db.php" autocomplete="off">
                    <div class="msg">Sign in to start your session</div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                             <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" maxlength="40" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input type="password" name="password" class="form-control" placeholder="Your Password" maxlength="15" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block bg-pink waves-effect" name="btn-login">Sign In</button>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.php">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.php">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>

</html>

<!-- Jquery Core Js -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Waves Effect Plugin Js -->
<script src="../../plugins/node-waves/waves.js"></script>
<!-- Validation Plugin Js -->
<script src="../../plugins/jquery-validation/jquery.validate.js"></script>
<!-- Custom Js -->
<script src="../../js/admin.js"></script>