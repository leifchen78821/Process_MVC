<?php

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
	
?>