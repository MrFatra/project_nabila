<?php 

	session_start();

	if(isset($_SESSION['status_login'])) {
		if($_SESSION['status_login'] == 'yes') {
			header("Location:index.php");
		}
	}
