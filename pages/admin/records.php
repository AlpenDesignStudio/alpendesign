<!DOCTYPE html>
<html>

<head>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Add Leaves</title>
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




<?php
/*
Allows the user to both create new records and edit existing records
*/

// connect to the database
include("connect-db.php");

// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($leave_cat = '',$leave_date = '', $leave_cause ='', $error = '', $id = '')
{ ?>







<title>
<?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<form  name="contact-form" method="POST" >
<div>
<?php if ($id != '') { ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<p>ID: <?php echo $id; ?></p>
<?php } ?>
                   
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <select id="select" name="leave_cat" class="form-control show-tick">
                                        <option value="<?php echo $leave_cat; ?>">Please select Category</option>

                                 <option value="Hindus" >Hindus</option>
                                <option value="Muslim" >Muslim</option>
                                <option value="Catholic" >Catholic</option>
                              
                                    </select>
                        </div>
                    </div>
                  
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="leave_cause" placeholder="Occasion " value="<?php echo $leave_cause; ?>" required autofocus>
                        </div>
                    </div>
                

                     <div class="input-group">

                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                                        <div class="form-line">
                                        <input type="date" class="form-control" placeholder="Date Of Occasion" name="leave_date" value="<?php echo $leave_date; ?>" required>
                                          
                                        </div>
                    </div>
                  

                    <button name="submit" value="Submit" class="btn btn-block btn-lg bg-pink waves-effect" type="submit"> ADD</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="../../home.php">Back to Dashboard</a>
                    </div>
                </form>


<?php }



/*

EDIT RECORD

*/
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id']))
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// make sure the 'id' in the URL is valid
if (is_numeric($_POST['id']))
{
// get variables from the URL/form
$id = $_POST['id'];
$leave_cat = htmlentities($_POST['leave_cat'], ENT_QUOTES);
$leave_date = htmlentities($_POST['leave_date'], ENT_QUOTES);
$leave_cause = htmlentities($_POST['leave_cause'], ENT_QUOTES);

// check that leave_datename and leave_cause are both not empty
if ($leave_cat == '' || $leave_date == '' || $leave_cause == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($leave_date, $leave_cause, $error, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $mysqli->prepare("UPDATE leaves SET leave_cat = ?, leave_date = ?, leave_cause = ?
WHERE id=?"))
{
$stmt->bind_param("ssi", $leave_cat, $leave_date, $leave_cause, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: records.php");
}
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// get 'id' from URL
$id = $_GET['id'];

// get the recod from the database
if($stmt = $mysqli->prepare("SELECT * FROM leaves WHERE id=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id,$leave_cat, $leave_date, $leave_cause);
$stmt->fetch();

// show the form
renderForm($leave_cat,$leave_date, $leave_cause, NULL, $id);

$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the view.php page
else
{
header("Location: view.php");
}
}
}



/*

NEW RECORD

*/
// if the 'id' variable is not set in the URL, we must be creating a new record
else
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// get the form data
$leave_cat = htmlentities($_POST['leave_cat'], ENT_QUOTES);
$leave_date = htmlentities($_POST['leave_date'], ENT_QUOTES);
$leave_cause = htmlentities($_POST['leave_cause'], ENT_QUOTES);

// check that leave_datename and leave_cause are both not empty
if ($leave_cat == '' || $leave_date == '' || $leave_cause == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($leave_cat, $leave_date, $leave_cause, $error);
}
else
{
// insert the new record into the database
if ($stmt = $mysqli->prepare("INSERT leaves (leave_cat, leave_date, leave_cause) VALUES (?,?, ?)"))
{
$stmt->bind_param("ss",$leave_cat, $leave_date, $leave_cause);
$stmt->execute();
$stmt->close();
}
// show an error if the query has an error
else
{
echo "ERROR: Could not prepare SQL statement.";
}

// redirec the user
header("Location: view.php");
}

}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}
}

// close the mysqli connection
$mysqli->close();
?>
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