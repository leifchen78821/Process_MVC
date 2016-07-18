<?php 

    header("Content-Type:text/html; charset=utf-8");
	
	require("../models/member_mod.php");
	
    if (isset($_POST["button_changePassword"]))
    {
    	header("Location: changepassword.php");
    	exit();
    }
    
?>