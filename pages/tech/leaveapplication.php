<?php
session_start(); 
 
$email = $_SESSION['email']; 
$dpt = $_SESSION['dpt']; 
// echo $email;die();
?>
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

<style type="text/css">

/*#hr{
   display: inline-block;
   width: 100%;
   border: 1px solid #fff;
   position: relative;
   border-bottom: 1px solid #ddd;
   }*/

</style>
</head>


<body class="signup-page" style="background-image: url(leave.jpg);background-repeat: no-repeat;
    background-size: cover;" ;>
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Leave  <b>Register</b></a>
            <!-- <small>Befor  Contact to Admin</small> -->
        </div>



        <div class="card" style="box-shadow: 0 4px 8px 0 rgb(108, 136, 163), 0 6px 20px 0 rgb(109, 139, 167);
    border: 1px solid #e92163;">
            <div class="body">
                <form id="leaveapp" action="#">
                  
                    <p><b> Department*</b></p>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">dehaze</i>
                        </span>
                        <div class="form-line">
                            <input type="text" id="dpt" class="form-control" name="dpt"  value="<?php echo $dpt;?>" readonly>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">check_box</i>
                        </span>
                        <div class="form-line">
                            <select id="day" name="day" class="form-control show-tick" required>
                                <option value="">Please select session</option>
                                <option value="halfday">Half day</option>
                                <option value="singleday">Single day</option>
                                <option value="multipleday">Multiple day</option>
                            </select>
                        </div>
                    </div>

                    <div style='display:none;' id='half'>
                    <p><b>Please select Date from*</b></p>
                    <div class="input-group">
                        <span class="input-group-addon">
                <i class="material-icons">date_range</i>
                </span>
                        <div class="form-line">
                        <input type="date" class="form-control" name="hdd" id="hdd" >
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">av_timer</i>
                        </span>
                        <div class="form-line">
                            <select id="hour" name="hour" class="form-control show-tick" >
                                <option value="">Select Hour</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                            </select>
                        </div>
                    </div></div>

                    <div style='display:none;' id='single'>
                    <p><b>Select leave day*</b></p>
                    <div class="input-group">
                        <span class="input-group-addon">
                <i class="material-icons">date_range</i>
                </span>
                    <div class="form-line">
                        <input type="date" class="form-control" name="sdd" id="sdd" >
                        </div>
                    </div></div>

                    <div style='display:none;' id='multiple'>
                    <p><b>Duration from*</b></p>
                    <div class="input-group">
                        <span class="input-group-addon">
                <i class="material-icons">date_range</i>
                </span>
                        <div class="form-line">
                            <input type="date" class="form-control" name="dd" id="dd" >
                        </div>
                    </div>

                    <p><b>Duration to*</b></p>
                    <div class="input-group">
                        <span class="input-group-addon">
                <i class="material-icons">date_range</i>
                </span>
                        <div class="form-line">
                            <input type="date" class="form-control" name="dd1" id="dd1" >
                        </div>
                    </div></div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">update</i>
                        </span>
                        <div class="form-line">
                            <select id="priority" name="priority" class="form-control show-tick" required>
                                <option value="">Priority of leave</option>
                                <option value="normal">Normal</option>
                                <option value="important">Important</option>
                                <option value="critical">Critical</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">priority_high</i>
                        </span>
                        <div class="form-line">
                            <input type="text" id="title" class="form-control" name="title" placeholder="Reason for Leave" required>
                        </div>
                    </div>

                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">priority_high</i>
                        </span>
                        <div class="form-line">
                            <input type="text" id="email" class="form-control" name="email" value="<?php echo $email;?>" readonly>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit" value="submit">SUBMIT</button>

                    <br><br>
                    <div id="error_message">
                        <div class="alert alert-danger hidden">
                            <strong>Oh snap!</strong> Failed To Sent your application..Please try again
                        </div>
                    </div>
                    <div id="success_message">
                        <div class="alert alert-success hidden">
                            Your Leave Application has Successfully sent to the admin for approval.
                        </div>
                    </div>

                     <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="leavedisplay.php">All Leaves</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="../../home.php">Back to Dashboard</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script>

$(document).ready(function(){
    $('#day').on('change', function() {
      if ( this.value == 'halfday')
      //.....................^.......
      {
        $("#half").show();
        $("#single").hide();
        $("#multiple").hide();
      }
      else  if ( this.value == 'singleday')
      {
        $("#half").hide();
        $("#single").show();
        $("#multiple").hide();
      }
      else  if ( this.value == 'multipleday')
      {
        $("#half").hide();
        $("#single").hide();
        $("#multiple").show();
      }
    });
});

        $("#leaveapp").on('submit',function(e) {
            // alert('test');
            // return false;
            var dpt = $("#dpt").val();
            var day = $("#day").val();
            var hdd = $("#hdd").val();
            var hour = $("#hour").val();
            var sdd = $("#sdd").val();
            var dd = $("#dd").val();
            var dd1 = $("#dd1").val();
            var priority = $("#priority").val();
            var title = $("#title").val();
            var email = $("#email").val();

            
           /* if(dpt == "" &&  day == "" && dd == "" && dd1 == "" && priority == "" && title == "" && email == "") {
               
            } else {*/
                // $("#error_message").html("").hide();
                $.ajax({
                    type: "POST",
                    url: "LAdb.php",
                    data: "dpt="+dpt+"&day="+day+"&hdd="+hdd+"&hour="+hour+"&sdd="+sdd+"&dd="+dd+"&dd1="+dd1+"&priority="+priority+"&title="+title+"&email="+email,
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
            
            e.preventDefault();
            document.getElementById("leaveapp").reset();

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