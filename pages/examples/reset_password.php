<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reset Password</title>
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


    <script type="text/javascript">
        // function valid()
        // {
        // if(document.chngpwd.opwd.value=="")
        // {
        // alert("Old Password Filed is Empty !!");
        // document.chngpwd.opwd.focus();
        // return false;
        // }
        // else if(document.chngpwd.npwd.value=="")
        // {
        // alert("New Password Filed is Empty !!");
        // document.chngpwd.npwd.focus();
        // return false;
        // }
        // else if(document.chngpwd.cpwd.value=="")
        // {
        // alert("Confirm Password Filed is Empty !!");
        // document.chngpwd.cpwd.focus();
        // return false;
        // }
        // else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
        // {
        // alert("Password and Confirm Password Field do not match  !!");
        // document.chngpwd.cpwd.focus();
        // return false;
        // }
        // return true;
        // }
    </script>
</head>

<body class="signup-page" style="background-image: url(reset_password.jpg)" ;>
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Alpen<b>Design</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>
        <div class="card">
            <div class="body">

                <form id="reset-password" action="#">



                    <div class="msg">
                        Reset Your Password AnyTime
                    </div>




                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="opwd" id="opwd" placeholder="Old Password" autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="npwd" id="npwd" placeholder="New Password" autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="cpwd" id="cpwd" placeholder="Confirm Password" autofocus>
                        </div>
                    </div>


                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" class="reset-password" value="Reset Password" name="Submit">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="sign-in.php">Sign In Now !</a>
                    </div>
                    <br><br>
                    <div id="error_message">
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
        $("#reset-password").on('submit',function(e) {
            // alert('test');
            // return false;
            var opwd = $("#opwd").val();
            var npwd = $("#npwd").val();
            var cpwd = $("#cpwd").val();
            //var comment = $("#comment").val();
            
            if(opwd == "" &&  npwd == "" && cpwd == "") {
                // $("#error_message").show().html("All Fields are Required");
            } else {
                // $("#error_message").html("").hide();
                $.ajax({
                    type: "POST",
                    url: "reset.php",
                    data: "opwd="+opwd+"&npwd="+npwd+"&cpwd="+cpwd,
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
    <script type="text/javascript">
        var password = document.getElementById("npwd")
        var confirm_password = document.getElementById("cpwd");
        
        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }
        
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
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