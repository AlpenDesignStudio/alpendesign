<?php
// $id = $_SESSION['visitor_id'];
$fullname = $_SESSION['fullname']; 
$email = $_SESSION['email'];

    //echo $pic;die();
?>


   <div class="user-info">
       <div class="image">
       <?php
                include 'check.php';
                
$res=mysqli_query($con,"Select * from profile where fullname='".$fullname."'");

       
         while($r=mysqli_fetch_row($res))
         { 
                 echo "<img  height='100' width='100' src='".$r[2]."'>";        
        }

                ?>
           <!-- <img src="images/user.png" width="48" height="48" alt="User" /> -->
       </div>
       <div class="info-container">
           <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fullname ?></div>
           <div class="email"><?php echo $email ?></div>
           <div class="btn-group user-helper-dropdown">
               <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
               <ul class="dropdown-menu pull-right">

                <li>
                        <a href="/examples/sign-up.php" id="sign-up">
                            <i class="material-icons">person_add</i>
                            <span>Sign up</span>
                        </a>
                    </li>


                   <li><a href="pages/examples/reset_password.php" id="reset_password"><i class="material-icons">person</i>Reset Password</a></li>
                   <li><a href="pages/examples/forgot-password.php" id="forgot-password"><i class="material-icons">person</i>Forgot Password</a></li>
                   <li><a href="pages/admin/logout.php" id="logout"><i class="material-icons">input</i>Sign Out</a></li>
               </ul>
           </div>
       </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous">
   </script>
   <script type="text/javascript">
       $(document).ready(function() {
           console.log(window.location.pathname);
           if (window.location.pathname == '/alpendesign/home.php' || window.location.pathname == 'home.php') {
               // alert('Home');
                $('#sign-up').attr('href', 'pages/examples/sign-up.php');
                $('#reset_password').attr('href', 'pages/examples/reset_password.php');
                $('#forgot-password').attr('href', 'pages/examples/forgot-password.php');
                $('#logout').attr('href', 'pages/examples/logout.php');

           } else {
               // alert('HR');
               $('#sign-up').attr('href', 'pages/examples/sign-up.php');
               $('#reset_password').attr('href', 'reset_password.php');
               $('#forgot-password').attr('href', 'forgot-password.php');
               $('#logout').attr('href', 'logout.php');
           }
       });
   </script>