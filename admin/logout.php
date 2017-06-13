<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['ID']);
	unset($_SESSION['manager']);

	header("location: login.php");
    exit();
	
?>