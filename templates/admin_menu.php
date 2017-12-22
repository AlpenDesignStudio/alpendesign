 <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">ADMIN DASHBOARD</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span>Admin</span>
                        </a>
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
                            <span>HR Activities</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="pages/admin/excel.php" id="excel">Leave Register</a>
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
                        $('#fileupload').attr('href','pages/admin/fileupload.php');
                        $('#excel').attr('href','pages/admin/excel.php');
                        $('#sheet').attr('href','pages/admin/excelSheet.php');
                        $('#leave').attr('href','pages/admin/leave.php');
                        $('#ias').attr('href','pages/admin/IAS.php');
                        $('#coverletter').attr('href','pages/admin/coverletter.php');
                        $('#timesheet').attr('href','pages/admin/timesheet.php');
                        
                    }else{
                        // alert('HR');
                        $('#fileupload').attr('href','fileupload.php');
                        $('#excel').attr('href','excel.php');
                        $('#sheet').attr('href','excelSheet.php');
                        $('#leave').attr('href','leave.php');
                        $('#ias').attr('href','IAS.php');
                        $('#coverletter').attr('href','coverletter.php');
                         $('#timesheet').attr('href','timesheet.php');
                        
                    }
                });
            </script>
