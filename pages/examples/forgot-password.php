<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Forgot Password</title>
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

<body class="signup-page" style="background-image: url(forget_password.jpg);background-repeat: no-repeat;background-size: cover;" ;>
    <div class="signup-box">

        <div class="logo">
            <a href="javascript:void(0);">Alpen<b>Design</b></a>
            <small>WELCOME TO ALPEN DESIGN</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password"  action="#">
                    <div class="msg">
                        Enter your email address that you used to register. We'll send you an email with your password.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="sign-in.php">Sign In!</a>
                    </div>
                      <br><br>
                  <div id="error_message" >
                  <div class="alert alert-danger hidden">
                                <strong>Oh snap!</strong> Failed To Reset Your Password..Try Again..!!
                            </div>
                  </div>
                  <div id="success_message">
                  <div class="alert alert-success hidden">
                    <strong>Well done!</strong> You Have successfully Reset Your Password..!!
                </div>
                  </div>
                </form>
            </div>
        </div>
    </div>


<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>
$("#forgot_password").on('submit',function(e) {
    // alert('test');
    // return false;
    var email = $("#email").val();
 
    //var comment = $("#comment").val();
    
    if(email == "") {
        // $("#error_message").show().html("All Fields are Required");
    } else {
        // $("#error_message").html("").hide();
        $.ajax({
            type: "POST",
            url: "passdb.php",
            data: "email="+email,
            success: function(data){
                // $('#success_message').fadeIn().html(data);
                // setTimeout(function() {
                //     $('#success_message').fadeOut("slow");
                // }, 2000 );
                //alert('test');
            var response = JSON.parse(data);
            // console.log(response.status);
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
    <script src="../../js/pages/examples/forgot-password.js"></script>
</body>

</html>