<?php
session_start();
session_destroy();
	echo "<script type='text/javascript'>alert('Logout Berjaya');
	window.location='login.php'
	</script>";
?>