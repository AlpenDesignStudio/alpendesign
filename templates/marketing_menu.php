<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MARKETING DASHBOARD</li>
        <li class="active">
            <a href="#">
                <i class="material-icons">home</i>
                <span>Admin</span>
            </a>
        </li>
         <li>
                        <a href="pages/marketing/profile.php" id="profile">
                            <i class="material-icons">settings</i>
                            <span>Profile</span>
                        </a>
                    </li>
        <li>
                        <a href="pages/marketing/holidays.php" id="holidays">
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
                <a href="pages/marketing/leaveapplication.php" id="leaveapplication">Leave Application</a>
            </li>

            <li>
                <a href="pages/marketing/leavedisplay.php" id="leavedisplay">View Leave Application</a>
            </li>
        </ul>
    </li>        

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">supervisor_account</i>
                <span>Training</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="pages/marketing/socialmedia.php" id="socialmedia">Social Media</a>
                </li>

                <li>
                    <a href="pages/marketing/Digital.php" id="digital">Digital Payment & Security</a>
                </li>

                <li>
                    <a href="pages/marketing/presentation.php" id="presentation">Presentation</a>
                </li>
                <li>
                    <a href="pages/marketing/nda.php" id="nda">NDA & Agreements</a>
                </li>
                <li>
                    <a href="pages/marketing/ico.php" id="ico">ICO Advertising</a>
                </li>
                <li>
                    <a href="pages/marketing/mailer.php" id="mailer">Mailer</a>
                </li>
                <li>
                    <a href="pages/marketing/rates.php" id="rates">Rates</a>
                </li>
                <li>
                    <a href="pages/marketing/events.php" id="events">Events</a>
                </li>
                <li>
                    <a href="pages/marketing/zip.php" id="zip">Zip Files</a>
                </li>
                <li>
                    <a href="pages/marketing/others.php" id="others">Others</a>
                </li>
                <li>
                    <a href="pages/marketing/roadshows.php" id="roadshows">Roadshows</a>
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
                    <a href="pages/marketing/fileupload.php" id="fileupload">Files Upload/Download</a>
                </li>
                <li>
                    <a href="pages/marketing/view.php" id="view">View Uploded</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="pages/tech/timesheet.php" id="timesheet">
                <i class="material-icons">folder</i>
                <span>Timesheet</span>
            </a>
        </li>


    </ul>
</div>
<!-- #Menu -->

<script type="text/javascript">
    $(document).ready(function() {
        console.log(window.location.pathname);
        if (window.location.pathname == '/alpendesign/home.php' || window.location.pathname == 'home.php') {
            // alert('Home');
            $('#profile').attr('href','pages/marketing/profile.php');
            $('#leaveapplication').attr('href', 'pages/marketing/leaveapplication.php');
            $('#leavedisplay').attr('href', 'pages/marketing/leavedisplay.php');
            $('#socialmedia').attr('href', 'pages/marketing/socialmedia.php');
            $('#digital').attr('href', 'pages/marketing/Digital.php');
            $('#presentation').attr('href', 'pages/marketing/presentation.php');
            $('#nda').attr('href', 'pages/marketing/nda.php');
            $('#ico').attr('href', 'pages/marketing/ico.php');
            $('#mailer').attr('href', 'pages/marketing/mailer.php');
            $('#rates').attr('href', 'pages/marketing/rates.php');
            $('#events').attr('href', 'pages/marketing/events.php');
            $('#zip').attr('href', 'pages/marketing/zip.php');
            $('#others').attr('href', 'pages/marketing/others.php');
            $('#roadshows').attr('href', 'pages/marketing/roadshows.php');
            $('#fileupload').attr('href', 'pages/marketing/fileupload.php');
            $('#view').attr('href', 'pages/marketing/view.php');
            $('#holidays').attr('href', 'pages/marketing/holidays.php');
            $('#timesheet').attr('href', 'pages/marketing/timesheet.php');
        } else {
            // alert('HR');
            $('#profile').attr('href','profile.php');
            $('#leaveapplication').attr('href', 'leaveapplication.php');
            $('#leavedisplay').attr('href', 'leavedisplay.php');
            $('#socialmedia').attr('href', 'socialmedia.php');
            $('#digital').attr('href', 'digital.php');
            $('#presentation').attr('href', 'presentation.php');
            $('#nda').attr('href', 'nda.php');
            $('#ico').attr('href', 'ico.php');
            $('#mailer').attr('href', 'mailer.php');
            $('#rates').attr('href', 'rates.php');
            $('#events').attr('href', 'events.php');
            $('#zip').attr('href', 'zip.php');
            $('#others').attr('href', 'others.php');
            $('#roadshows').attr('href', 'roadshows.php');
            $('#fileupload').attr('href', 'fileupload.php');
            $('#view').attr('href', 'view.php');
            $('#holidays').attr('href', 'holidays.php');
            $('#timesheet').attr('href', 'timesheet.php');
        }
    });
</script>