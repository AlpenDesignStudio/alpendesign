<?php
print_r($_POST["file"]);die;
	if (!empty($_POST["file"])) {
		print "<div class='alert alert-success' id='success_message'>
                                <strong>Well done!</strong>  successfully.
                            </div>";
	}
	else{
		print "  <div class='alert alert-danger' id='error_message'>
                                <strong>Oh snap!</strong> Sorry.
                            </div>";
	}
?>