<?php

if ($_COOKIE["userName"] == "Guest") {
	echo "<script language='JavaScript'>";
	echo "alert('你不應該來這呦!!!');location.href='connect4site.php';";
	echo "</script>";
}
else {
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
}

?>