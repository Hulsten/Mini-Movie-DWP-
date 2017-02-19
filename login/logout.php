<?php
	session_start();
	require_once("includes/functions.php");
	
	session_destroy();
	redirect_to("/");
?>