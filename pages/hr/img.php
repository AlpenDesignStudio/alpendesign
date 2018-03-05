
<?php
include "check.php";
// $id = $_SESSION['visitor_id'];
//print_r($_SESSION);die();
session_start();
$user = $_SESSION['fullname']; 
$email = $_SESSION['email']; 
     //echo $id;die();
?>
<form action="" method="post" enctype="multipart/form-data">
<?php
$res=mysqli_query($con,"select * from profile  where user='$user'");
$pics=$res->fetch_assoc();
// print_r($pics);die();
$res=mysqli_query($con,"select * from profile  where user='$user'");  
// print_r($res); die();    
         while($r=mysqli_fetch_row($res))
         {            
           if (empty($r[1])) {
            // print_r($r[2]);die();
                    echo '<div class="imgLow" >';
echo "<img src='../examples/upload/d.png' height='100' width='100'/></div>";

                 }

else{
                 echo '<div class="imgLow" >';
echo "<img src='../examples/upload/$pics[url]' height='100' width='100'   class='doubleborder'/></div>";
              }


}

?>


</form>