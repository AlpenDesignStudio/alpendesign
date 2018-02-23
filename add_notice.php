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

<body class="signup-page" style="background-image: url(holiday.jpg);background-repeat: no-repeat;
   background-size: cover;">
    <div class="signup-box">
      <div class="logo">
        <a href="javascript:void(0);">Holiday <b>Register</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>
        <div class="card">
            <div class="body"  ;>
                <form id="holiday" action="#">
                    <div class="msg">Add a new Holiday</div>
                   
                                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">perm_contact_calendar</i>
                        </span>
                        <div class="form-line">
                            <input id="notice_date" type="date" class="form-control" placeholder="" name="notice_date" required autofocus>
                     
                        </div>
                    </div>             

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                        <input id="headline" type="text" class="form-control" name="headline" placeholder="Notice headline" required autofocus>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">domain</i>
                        </span>
                         <div class="form-group">
                                <div class="form-line">
                                    <textarea id="notice" name="notice" rows="1" class="form-control no-resize auto-growth" placeholder="Notice.."></textarea>
                                </div>
                            </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">PUBLISH NOTICE</button>

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

            
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="viewholidays.php">All Holidays</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="../../home.php">Back to Dashboard</a>
                        </div>
                    </div>
                    <br>
                  <div id="error_message" >
                  <div class="alert alert-danger hidden">
                                <strong>Oh snap!</strong> Failed To Add Holiday..Try Again..!!
                            </div>
                  </div>
                  <div id="success_message">
                  <div class="alert alert-success hidden">
                    <strong>Well done!</strong> You Have successfully Added Holiday..!!
                </div>
                  </div>
                </form>
            </div>
        </div>
    </div>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>
$("#holiday").on('submit',function(e) {
    // alert('test');
    // return false;
    var leave_cat = $("#leave_cat").val();
    var leave_cause = $("#leave_cause").val();
    var leave_date = $("#leave_date").val();
    var leave_datee = $("#leave_datee").val();
    //var comment = $("#comment").val();
    
    if(leave_cat == "" &&  leave_cause == "" && leave_date == "" && leave_datee == "") {
        // $("#error_message").show().html("All Fields are Required");
    } else {
        // $("#error_message").html("").hide();
        $.ajax({
            type: "POST",
            url: "holidaysdb.php",
            data: "leave_cat="+leave_cat+"&leave_cause="+leave_cause+"&leave_date="+leave_date+"&leave_datee="+leave_datee,
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
   

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>