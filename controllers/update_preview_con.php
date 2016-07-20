<?php

if ($_COOKIE["userName"] == "Guest") {
	echo "<script language='JavaScript'>";
	echo "alert('你不應該來這呦!!!');location.href='index.php';";
	echo "</script>";
}
else {
	session_start();
	 
	if (isset($_POST["button_repair"])) {
		header("Location: update.php");
		exit();
	}
	if (isset($_POST["button_send"])) {
	    require("../models/update_preview_mod.php");
		
		header("Location: member.php?choose=2");
		$state = $_SESSION['state'] ;
		session_destroy();
		session_start();
		$_SESSION['state'] = $state ;
		
		exit();
	}
}

?>