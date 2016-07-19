<?php

	session_start();
	require("../models/upload_preview_mod.php");
     
	if (isset($_POST["button_repair"])) {
		header("Location: upload.php");
		exit();
	}
	if (isset($_POST["button_send"])) {
	    require("../models/upload_preview_mod_send.php");
		
		if ($_SESSION['state'] == "food") {
			header("Location: page_food.php");
			session_destroy();
			exit();
		}
		else {
			header("Location: page_dress.php");
			session_destroy();
			exit();
		}
	}
	
?>