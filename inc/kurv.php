<?php
	session_start();

	if(isset($_POST["add"])){
		if(isset($_POST["id"])) {

			if(!is_array($_SESSION["kurv"])){
				$_SESSION["kurv"] = array();
			}

			if(is_array($_SESSION["kurv"])) {
				array_push($_SESSION["kurv"], $_POST["id"]);
			}
		}
	}else if(isset($_POST["delete"])){
		if(isset($_POST["id"])) {
			if(is_array($_SESSION["kurv"])) {
				unset($_SESSION["kurv"][array_search($_POST["id"], $_SESSION["kurv"])]);
			}
		}
	}

	echo json_encode($_SESSION["kurv"]);
?>