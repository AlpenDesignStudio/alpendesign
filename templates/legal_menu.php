 <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">LEGAL DASHBOARD</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span>Admin</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder</i>
                            <span>Files</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/legal/fileupload.php" id="fileupload">Files Upload/Download</a>
                            </li>

                            <li>
                                <a href="pages/legal/view.php" id="view">View Uploaded Files</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">library_books</i>
                            <span>Templates</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/legal/blankshareagreement.php" id="bsl">Blank Share Agreement</a>
                            </li>

                            <li>
                                <a href="pages/legal/nondisclosureagreement.php" id="nda">Non Disclosure Agreement</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder_special</i>
                            <span>Projects</span>
                        </a>
                        <ul class="ml-menu">

                             <li>
                                <a href="#" id="cpc">Contract Preparation Checklist</a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>TWEX Documents</span>
                                </a>
                                <ul class="ml-menu">
                                    
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>TWEX ICO</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="pages/legal/taginvestment.php" id="investment">
                                                    <span>Tag Investment Project Analysis</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Internal Projects</span>
                                                </a>

                                                <ul class="ml-menu">
                                            <li>
                                                <a href="pages/legal/adsl.php" id="adsl">
                                                    <span>ADSL</span>
                                                </a>
                                            </li>
                                             <li>
                                                <a href="pages/legal/tkrsico.php" id="tkrs">
                                                    <span>TKRS</span>
                                                </a>
                                            </li>
                                             <li>
                                                <a href="pages/legal/twex.php" id="twex">
                                                    <span>TWEX</span>
                                                </a>
                                            </li>
                                        </ul>

                                            </li>

                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Client Projects</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="pages/legal/nda.php" id="nda">
                                                    <span>NDA & Agreements</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle" >
                            <span>TKRS Documents</span>
                        </a>
                        <ul class="ml-menu">
                                            <li>
                                                <a href="pages/legal/taginvestment.php" id="investment">
                                                    <span>Tag Investment Project Analysis</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Internal Projects</span>
                                                </a>
                                            </li>

                                            

                                        </ul>

                    </li>

                        </ul>
                    </li>

                    

                    <li>
                        <a href="pages/legal/timesheet.php" id="timesheet" >
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
                        $('#fileupload').attr('href','pages/legal/fileupload.php');
                        $('#view').attr('href','pages/legal/view.php');
                        $('#bsl').attr('href','pages/legal/blankshareagreement.php');
                        $('#nda').attr('href','pages/legal/nondisclosureagreement.php');
                        $('#cpc').attr('href','pages/legal/');
                        $('#investment').attr('href','pages/legal/taginvestment.php');
                        $('#adsl').attr('href','pages/legal/adsl.php');
                        $('#tkrs').attr('href','pages/legal/tkrsico.php');
                        $('#twex').attr('href','pages/legal/twex.php');
                        $('#td').attr('href','pages/legal/');
                        $('#tkd').attr('href','pages/legal/');
                        $('#adsld').attr('href','pages/legal/');
                        $('#wt').attr('href','pages/legal/');
                        $('#nda').attr('href','pages/legal/nda.php');
                        $('#timesheet').attr('href','pages/legal/');
                    }else{
                        // alert('HR');
                        $('#fileupload').attr('href','fileupload.php');
                        $('#view').attr('href','view.php');
                        $('#bsl').attr('href','blankshareagreement.php');
                        $('#nda').attr('href','nondisclosureagreement.php');
                        $('#investment').attr('href','taginvestment.php');
                        $('#adsl').attr('href','adsl.php');
                        $('#tkrs').attr('href','tkrsico.php');
                        $('#twex').attr('href','twex.php');
                        $('#nda').attr('href','nda.php');
                    }
                });
            </script>            