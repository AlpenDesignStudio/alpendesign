<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
print_r($_SESSION);die();
$connection = mysql_connect("localhost", "root", "root");

// Selecting Database
$db = mysql_select_db("alpendesign", $connection);
session_start();// Starting Session
// Storing Session
//$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from ar_login where email='$user_check'", $connection);

$row = mysql_fetch_assoc($ses_sql);
echo $row;die();
$_SESSION['email']=$ses_sql;
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
session_destroy(); // Is Used To Destroy All Sessions
header('Location: ../../index.php'); // Redirecting To Home Page
}
?>