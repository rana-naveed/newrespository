<?php
	session_start();
	session_destroy();
	session_unset();
	echo "<font color='red' size='3px' ><center>you are successfully logout</center></font>";
	header('refresh:2, url=index.php');
		
?>