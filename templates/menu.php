 <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    

                    <!-- Home tab -->
                    <li class="active">
                        <a href="index.php" id="home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <!-- About tab -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>About ADSL</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="about.php" id="about">About us</a>
                            </li>
                            <li>
                                <a href="">Team</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Portfolio tab -->
                    <li>
                        <a href="image-gallery.php" id="gallery">
                            <i class="material-icons">perm_media</i>
                            <span>Portfolio</span>
                        </a>
                    </li>

                    <!-- Blogs tab -->
                    <li>
                        <a href="">
                            <i class="material-icons">content_copy</i>
                            <span>Blogs</span>
                        </a>
                    </li>

                    <!-- Contact tab -->
                    <li>
                        <a href="contact.php">
                            <i class="material-icons">contacts</i>
                            <span>Contact Us</span>
                        </a>
                    </li>

                    <!-- Tools tab -->

                    <li>
                        <a href="tools.php" id="tools">
                            <i class="material-icons">inbox</i>
                            <span>Tools</span>
                        </a>
                    </li>
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
                    if(window.location.pathname == '/alpendesign' ){
                            // alert('Home');
                        $('#home').attr('href','index.php');
                        $('#about').attr('href','about.php');
                        $('#gallery').attr('href','gallery.php');
                        $('#tools').attr('href','tools.php');
                       
                    }else{
                        // alert('HR');
                        $('#home').attr('href','index.php');
                        $('#about').attr('href','about.php');
                        $('#gallery').attr('href','gallery.php');
                        $('#tools').attr('href','tools.php');


                        
                    }
                });
            </script>