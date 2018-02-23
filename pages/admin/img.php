<?php 
$user = $_SESSION['fullname']; 


$res=mysqli_query($con,"select url from profile  where user='$user'");
$pics=$res->fetch_assoc();
// print_r($pics);die();
$res=mysqli_query($con,"select url from profile  where user='$user'");      
         while($r=mysqli_fetch_row($res))
         {            
           if (empty($r[0])) {
           
print_r($r[0]);die();
            // print_r($r[2]);die();
                    echo '<div class="imgLow" >';
echo "<img src='upload/d.png' alt='' padding-top: 7%;vertical-align: middle;height: 230px;width: 200px;margin-left: 20%;   class='doubleborder'/></div>";

                 }

else{ 
                 echo '<div class="imgLow" >';
echo "<img src='upload/$r[0])' alt='' padding-top: 7%;vertical-align: middle;height: 230px;width: 200px;margin-left: 20%;   class='doubleborder'/></div>";
              }




}
?>