<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">TECHNICAL DASHBOARD</li>
        <li class="active">
            <a href="#">
                <i class="material-icons">home</i>
                <span>Admin</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">supervisor_account</i>
                <span>Training</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Mobile App Development</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/tech/assignment.php" id="assignment">
                                <span>Assignment</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/tech/howto.php" id="howto">
                                <span>How to</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/tech/notes.php" id="notes">
                                <span>Notes</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/tech/practical.php" id="practical">
                                <span>Practicals</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/tech/videos.php" id="videos">
                                <span>Videos</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/tech/zip.php" id="zip">
                                <span>Zip Files</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Crowd Funding, Cryto Currency & Block Chain</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/tech/crowd.php" id="crowd">
                                <span>Crowd Funding</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/tech/blockchain.php" id="blockchain">
                                <span>Block Chain</span>
                            </a>
                        </li>

                    </ul>
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
                    <a href="pages/tech/fileupload.php" id="fileupload">Files Upload/Download</a>
                </li>
                <li>
                    <a href="pages/tech/view.php" id="view">View Uploded</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="pages/tech/timesheet.php" id="timesheet">
                <i class="material-icons">folder</i>
                <span>Timesheet</span>
            </a>
        </li>
          <li>
            <a href="pages/tech/holidays.php" id="holidays">
                <i class="material-icons">folder</i>
                <span>Holidays</span>
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
                        $('#assignment').attr('href','pages/tech/assignment.php');
                        $('#howto').attr('href','pages/tech/howto.php');
                        $('#notes').attr('href','pages/tech/notes.php');
                        $('#practical').attr('href','pages/tech/practical.php');
                        $('#videos').attr('href','pages/tech/videos.php');
                        $('#zip').attr('href','pages/tech/zip.php');
                        $('#crowd').attr('href','pages/tech/crowd.php');
                        $('#blockchain').attr('href','pages/tech/blockchain.php');
                        $('#fileupload').attr('href','pages/tech/fileupload.php');
                        $('#view').attr('href','pages/tech/view.php');
                         $('#holidays').attr('href', 'pages/tech/holidays.php');
                        $('#timesheet').attr('href','pages/tech/timesheet.php');
                    }else{
                        // alert('HR');
                        $('#assignment').attr('href','assignment.php');
                        $('#howto').attr('href','howto.php');
                        $('#notes').attr('href','notes.php');
                        $('#practical').attr('href','practical.php');
                        $('#videos').attr('href','videos.php');
                        $('#zip').attr('href','zip.php');
                        $('#crowd').attr('href','crowd.php');
                        $('#blockchain').attr('href','blockchain.php');
                        $('#fileupload').attr('href','fileupload.php');
                        $('#view').attr('href','view.php');
                        $('#holidays').attr('href', 'holidays.php');
                        $('#timesheet').attr('href','timesheet.php');
                    }
                });
            </script>