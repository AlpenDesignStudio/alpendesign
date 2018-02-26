<?php
// $id = $_SESSION['visitor_id'];
$fullname = $_SESSION['fullname']; 
$email = $_SESSION['email']; 
     //echo $id;die();
?>
<div class="user-info">
            
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fullname ?></div>
                    <div class="email"><?php echo $email ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
<!-- 
 <li><a href="pages/examples/reset_password.php"><i class="material-icons">person</i>Reset Password</a></li> 
 <li><a href="pages/examples/forgot-password.php"><i class="material-icons">person</i>Forgot Password</a></li> -->

                            <li><a href="pages/legal/logout.php" id="logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

 <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
</script>
            <script type="text/javascript">
                $(document).ready(function(){
                    console.log(window.location.pathname);
                    if(window.location.pathname == '/alpendesign/home.php' || window.location.pathname == 'home.php'){
                            // alert('Home');
                        $('#logout').attr('href','pages/legal/logout.php');          
                        
                    }else{
                        // alert('HR');
                        $('#logout').attr('href','logout.php');                     
                    }
                });
            </script>