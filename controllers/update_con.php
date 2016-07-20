<?php

if ($_COOKIE["userName"] == "Guest") {
	echo "<script language='JavaScript'>";
	echo "alert('你不應該來這呦!!!');location.href='index.php';";
	echo "</script>";
}
else {
    header("Content-Type:text/html; charset=utf-8");
    session_start();
    
    require("../models/update_mod.php");
    
    if (isset($_POST["button_preview"])) {
        if($_FILES["file"]["tmp_name"] != '') {
            $_SESSION['image'] = $_FILES["file"]["name"] ;
            $_SESSION['image_tmp'] = $_FILES["file"]["tmp_name"] ;
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        }
        
        $_SESSION['Name'] = $_COOKIE["userName"] ;
        $_SESSION['source'] = $_POST["S1"] ;
        $_SESSION['address_X'] = $_POST["address_X"] ;
        $_SESSION['address_Y'] = $_POST["address_Y"] ;
        $_SESSION['title'] = $_POST["title"] ;
        $_SESSION['article'] = $_POST["article"] ;
        
        $_SESSION['change'] = 1 ;
    	header("Location: update_preview.php");
    	exit();
    }
    if (isset($_POST["button_clear"])) {
    	header("Location: member.php?choose=2");
    	session_destroy();
    }
}

?>