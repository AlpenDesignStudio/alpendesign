<?php
// $id = $_SESSION['visitor_id'];
$fname = $_SESSION['fname']; 
$email = $_SESSION['email'];

    //echo $pic;die();
?>


   <div class="user-info">
       <div class="image">
       <?php
                include 'check.php';
                
$res=mysqli_query($con,"Select * from profile where fname='".$fname."'");

       
         while($r=mysqli_fetch_row($res))
         { 
                 echo "<img  height='100' width='100' src='".$r[2]."'>";        
        }

                ?>
           <!-- <img src="images/user.png" width="48" height="48" alt="User" /> -->
       </div>
       <div class="info-container">
           <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fname ?></div>
           <div class="email"><?php echo $email ?></div>
           <div class="btn-group user-helper-dropdown">
               <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
               <ul class="dropdown-menu pull-right">

                <li>
                        <a href="../examples/sign-up.php" id="sign-up">
                            <i class="material-icons">person_add</i>
                            <span>Sign up</span>
                        </a>
                    </li>


                   <li><a href="pages/examples/reset_password.php" id="reset_password"><i class="material-icons">person</i>Reset Password</a></li>
                   <li><a href="pages/examples/forgot-password.php" id="forgot-password"><i class="material-icons">person</i>Forgot Password</a></li>

                   <li><a href="pages/examples/profile.php" id="profile"><i class="material-icons">person</i>Profile</a></li>
                   <li role="seperator" class="divider"></li>
                   <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                   <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                   <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                   <li role="seperator" class="divider"></li>
                   <li><a href="pages/admin/logout.php" id="logout"><i class="material-icons">input</i>Sign Out</a></li>
               </ul>
           </div>
       </div>
   </div>
<!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">ADMIN DASHBOARD</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder</i>
                            <span>Holidays</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/admin/holidays.php" id="holidays">Add Holidays</a>
                            </li>
                            <li>
                                <a href="pages/admin/viewholidays.php" id="viewholidays">View Holidays</a>
                            </li>
                        </ul>
                    
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder</i>
                            <span>Project</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/admin/fileupload.php" id="fileupload">Files Upload/Download</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>ADMIN Activities</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/admin/excel.php" id="excel">Leave Register</a>
                            </li>
                            <li>
                                <a href="pages/admin/leavedisplay.php" id="leaveapp">Leave Display</a>
                            </li>
                            <li>
                                <a href="pages/admin/excelSheet.php" id="sheet">Uploaded Sheet</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">library_books</i>
                            <span>Policies</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/admin/leave.php" id="leave">Leave Policy</a>
                            </li>
                            <li>
                                <a href="pages/admin/IAS.php" id="ias">Interview Assessment Policy</a>
                            </li>
                            <li>
                                <a href="pages/admin/coverletter.php" id="coverletter">Cover Letter</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/admin/timesheet.php" id="timesheet">
                            <i class="material-icons">folder</i>
                            <span>Timesheet</span>
                        </a>
                    </li>
                 </ul>   
            </div>
            <!-- #Menu -->
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
                             $('#sign-up').attr('href', 'pages/examples/sign-up.php');

                        $('#fileupload').attr('href','pages/admin/fileupload.php');
                        $('#excel').attr('href','pages/admin/excel.php');
                        $('#leaveapp').attr('href','pages/admin/leavedisplay.php');
                        $('#sheet').attr('href','pages/admin/excelSheet.php');
                        $('#leave').attr('href','pages/admin/leave.php');
                        $('#ias').attr('href','pages/admin/IAS.php');
                        $('#coverletter').attr('href','pages/admin/coverletter.php');
                        $('#timesheet').attr('href','pages/admin/timesheet.php');
                         $('#holidays').attr('href','pages/admin/holidays.php');
                          $('#viewholidays').attr('href','pages/admin/viewholidays.php');
                        
                    }else{
                        // alert('HR');
                         $('#sign-up').attr('href', 'sign-up.php');


                        $('#fileupload').attr('href','fileupload.php');
                        $('#excel').attr('href','excel.php');
                        $('#leaveapp').attr('href','leavedisplay.php');
                        $('#sheet').attr('href','excelSheet.php');
                        $('#leave').attr('href','leave.php');
                        $('#ias').attr('href','IAS.php');
                        $('#coverletter').attr('href','coverletter.php');
                         $('#timesheet').attr('href','timesheet.php');
                         $('#holidays').attr('href','holidays.php');
                         $('#viewholidays').attr('href','viewholidays.php');
                        
                    }
                });
            </script>
