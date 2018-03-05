<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Add Payroll</title>
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

<body class="signup-page" style="background-image: url(holiday.jpg);background-repeat: no-repeat;
   background-size: cover;">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Payroll <b>Register</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>
        <div class="card">
            <div class="body" ;>
                <form id="payroll" action="#" >
                    <div class="msg">Add Payroll AnyTime  </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">favorite</i>
                        </span>
                        <div class="form-line">
                            <select id="dpt" name="dpt" class="form-control show-tick" required>
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
                             <input type="text" name="fullname" id="fullname" tabindex="" class="form-control" placeholder="Full Name" />

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
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="position" id="position" value="" tabindex="" class="form-control" placeholder="position" required>

                        </div>
                    </div>

                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="init" id="init" value="" tabindex="" class="form-control" placeholder="init" required>

                        </div>
                    </div>

                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="pay" id="pay" value="" tabindex="" class="form-control" placeholder="pay" required>

                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="dayswork" id="dayswork" value="" tabindex="" class="form-control" placeholder="dayswork" required>

                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="otrate" id="otrate" value="" tabindex="" class="form-control" placeholder="otrate" required>

                        </div>
                    </div>

                  

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="others" id="others" value="" tabindex="" class="form-control" placeholder="others" required>

                        </div>
                    </div>

                         <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="allow" id="allow" value="" tabindex="" class="form-control" placeholder="allow" required>

                        </div>
                    </div>

                         <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="advances" id="advances" value="" tabindex="" class="form-control" placeholder="advances" required>

                        </div>
                    </div>

                         <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <input type="text" name="insurance" id="insurance" value="" tabindex="" class="form-control" placeholder="insurance" required>

                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" name="submit"  > ADD PAYROLL</button>


                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="viewpayroll.php">VIEW</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="../../home.php">Back to Dashboard</a>
                        </div>
                    </div>
                    <br>
                    <div id="error_message">
                        <div class="alert alert-danger hidden">
                            <strong>Oh snap!</strong> Failed To Add Payroll..Try Again..!!
                        </div>
                    </div>
                    <div id="success_message">
                        <div class="alert alert-success hidden">
                            <strong>Well done!</strong> You Have successfully Added / Updated Payroll..!!
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script>

        $("#payroll").on('submit',function(e) {
            // alert('test');
            // return false;
            var dpt = $("#dpt").val();
            var fullname = $("#fullname").val();
            var email = $("#email").val();
            var position = $("#position").val();
            var init = $("#init").val();
            var pay = $("#pay").val();
            var dayswork = $("#dayswork").val();
            var otrate = $("#otrate").val();
            var others = $("#others").val();
            var allow = $("#allow").val();
            var advances = $("#advances").val();
            var insurance = $("#insurance").val();
            //var comment = $("#comment").val();
            
            if(dpt == "" && fullname == "" && email == "" &&  position == "" && init == "" && pay == "" && dayswork == "" && otrate == "" && others == "" && allow == "" && advances == "" && insurance == "") {
                // $("#error_message").show().html("All Fields are Required");
            } else {
                // $("#error_message").html("").hide();
                $.ajax({
                    type: "POST",
                    url: "payrolldb.php",
                    data: "dpt="+dpt+"&fullname="+fullname+"&email="+email+"&position="+position+"&init="+init+"&pay="+pay+"&dayswork="+dayswork+"&otrate="+otrate+"&others="+others+"&allow="+allow+"&advances="+advances+"&insurance="+insurance,
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
        document.getElementById("payroll").reset();

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


    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>