
 <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">HR DASHBOARD</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="pages/hr/profile.php" id="profile">
                            <i class="material-icons">settings</i>
                            <span>Profile</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder</i>
                            <span>Leave Application</span>
                        </a>
                        <ul class="ml-menu">
                              <li>
                                <a href="pages/hr/leaveapplication.php" id="leaveapp">Leave Application</a>
                            </li>
                             <li>
                                <a href="pages/hr/leavedisplay.php" id="leaveapp">View Leave Application</a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder</i>
                            <span>Files</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/hr/fileupload.php" id="fileupload">Files Upload/Download</a>
                            </li>

                            <li>
                                <a href="pages/hr/view.php" id="view">View Uploaded Files</a>
                            </li>
                              <li>
                                <a href="pages/hr/leaveapplication.php" id="leaveapp">Leave Application</a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>HR Activities</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="pages/hr/excel.php" id="leave_reg">Leave Register</a>
                            </li>

                            <li>
                                <a href="pages/hr/excelSheet.php" id="uploaded">Uploaded Sheet</a>
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
                                <a href="pages/hr/leave.php" id="leave">Leave Policy</a>
                            </li>
                            <li>
                                <a href="pages/hr/IAS.php" id="ias">Interview Assessment Policy</a>
                            </li>
                            <li>
                                <a href="pages/hr/coverletter.php" id="cover">Cover Letter</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="pages/hr/timesheet.php" id="timesheet">
                            <i class="material-icons">folder</i>
                            <span>Timesheet</span>
                        </a>
                    </li>
                      <li>
            <a href="pages/hr/holidays.php" id="holidays">
                <i class="material-icons">folder</i>
                <span>holidays</span>
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
                        $('#profile').attr('href','pages/hr/profile.php');
                        $('#fileupload').attr('href','pages/hr/fileupload.php');
                        $('#leave_reg').attr('href','pages/hr/excel.php');
                        $('#uploaded').attr('href','pages/hr/excelSheet.php');
                        $('#view').attr('href','pages/hr/view.php');
                        $('#leaveapp').attr('href','pages/hr/leaveapplication.php');
                        $('#leave').attr('href','pages/hr/leave.php');
                        $('#ias').attr('href','pages/hr/IAS.php');
                        $('#cover').attr('href','pages/hr/coverletter.php');
                         $('#holidays').attr('href', 'pages/hr/holidays.php');
                        $('#timesheet').attr('href','pages/hr/timesheet.php');
                    }else{
                        // alert('HR');
                        $('#profile').attr('href','profile.php');
                        $('#fileupload').attr('href','fileupload.php');
                        $('#leave_reg').attr('href','excel.php');
                        $('#uploaded').attr('href','excelSheet.php');
                        $('#view').attr('href','view.php');
                         $('#leaveapp').attr('href','leaveapplication.php');
                        $('#leave').attr('href','leave.php');
                        $('#ias').attr('href','IAS.php');
                        $('#cover').attr('href','coverletter.php');
                        $('#holidays').attr('href', 'holidays.php');
                        $('#timesheet').attr('href','timesheet.php');
                    }
                });
            </script>