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

<body class="signup-page" style="background-image: url(register.jpg);background-repeat: no-repeat;background-size: cover;" ;>
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Alpen<b>Design</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" action="#">

                    <div class="msg">Register a new Employee</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">business_center</i>
                        </span>
                        <div class="form-line">
                            <select id="dpt" name="dpt" class="form-control show-tick">
                                <option value="">Please select Department</option>
                                <option value="Admin">Admin</option>
                                <option value="HR">HR</option>
                                <option value="Technical">Technical</option>
                                <option value="Legal">Legal</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Creative">Creative</option>
                            </select>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                        <input id="fullname" type="text" class="form-control" name="fullname" placeholder="Full Name" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input id="no" type="text" class="form-control" name="no" placeholder="Contact Number" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">domain</i>
                        </span>
                        <div class="form-line">
                            <input id="address" type="text" class="form-control" name="address" placeholder="Residential Address" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">wc</i>
                        </span>
                        <div class="form-line">
                            <select id="gender" name="gender" class="form-control show-tick">
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
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input id="pass" type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">perm_contact_calendar</i>
                        </span>
                        <div class="form-line">
                            <input id="dob" type="date" class="form-control" placeholder="Date Of Birth" name="dob" required autofocus>
                     
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.php">You already have a membership?</a>
                    </div>

    <br><br>
                  <div id="error_message" >
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
            </div>
        </div>
    </div>


<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>
$("#sign_up").on('submit',function(e) {

    // alert('test');
    // return false;
    var dpt = $("#dpt").val();
    var fullname = $("#fullname").val();
    var no = $("#no").val();
    var address = $("#address").val();
    var gender = $("#gender").val();
    var email = $("#email").val();
    var password = $("#pass").val();
    var dob = $("#dob").val();

    //var comment = $("#comment").val();
    
    if(dpt == "" &&  fullname == "" && no == ""  && address == "" &&  gender == "" && email == "" && password == "" && dob == "") {
        // $("#error_message").show().html("All Fields are Required");
    } else {
        // $("#error_message").html("").hide();
        $.ajax({
            type: "POST",
            url: "db.php",
            //data: "opwd="+opwd+"&npwd="+npwd+"&cpwd="+cpwd,

            data: "dpt="+dpt+"&fullname="+fullname+"&no="+no+"&address="+address+"&gender="+gender+"&email="+email+"&password="+password+"&dob="+dob,
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
    document.getElementById("sign_up").reset();

});
</script>   

    <!-- Bootstrap Material Datetime Picker Plugin Js -->


    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>


    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <!-- Custom Js -->


    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/count.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>

    <!-- <script language="javascript">
        populateCountries("country", "state");
    </script> -->
</body>

</html>