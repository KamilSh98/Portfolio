<?php

	session_start();
	
	session_unset();
	
	header('Location: Logowanie.php');

?>