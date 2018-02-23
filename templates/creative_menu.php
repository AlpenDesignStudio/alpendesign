 <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">CREATIVE DASHBOARD</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="pages/creative/holidays.php" id="holidays">
                            <i class="material-icons">folder</i>
                            <span>Holidays</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder</i>
                            <span>Leave Application</span>
                        </a>
                        <ul class="ml-menu">
                              <li>
                                <a href="pages/creative/leaveapplication.php" id="leaveapplication">Leave Application</a>
                            </li>
                             <li>
                                <a href="pages/creative/leavedisplay.php" id="leavedisplay">View Leave Application</a>
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
                                <a href="pages/creative/fileupload.php" id="fileupload">Files Upload/Download</a>
                            </li>

                            <li>
                                <a href="pages/creative/view.php" id="view">View Uploaded Files</a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="pages/creative/timesheet.php" id="timesheet">
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
            $('#leaveapplication').attr('href','pages/creative/leaveapplication.php');
            $('#leavedisplay').attr('href','pages/creative/leavedisplay.php'); 
            $('#fileupload').attr('href','pages/creative/fileupload.php');
            $('#view').attr('href','pages/creative/view.php');
            $('#timesheet').attr('href','pages/creative/timesheet.php');
            $('#holidays').attr('href', 'pages/creative/holidays.php');
                    
            }else{
            // alert('HR');
            $('#leaveapplication').attr('href','leaveapplication.php');
            $('#leavedisplay').attr('href','leavedisplay.php');
            $('#fileupload').attr('href','fileupload.php');
            $('#view').attr('href','view.php');
            $('#timesheet').attr('href','timesheet.php');
            $('#holidays').attr('href', 'holidays.php');
                    }
                });
            </script>