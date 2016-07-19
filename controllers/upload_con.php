<?php

session_start();

if (isset($_POST["button_preview"])) {
    
    $_SESSION['Name'] = $_COOKIE["userName"] ;
    $_SESSION['source'] = $_POST["S1"] ;
    $_SESSION['address_X'] = $_POST["address_X"] ;
    $_SESSION['address_Y'] = $_POST["address_Y"] ;
    $_SESSION['image'] = $_FILES["file"]["name"] ;
    $_SESSION['image_tmp'] = $_FILES["file"]["tmp_name"] ;
    $_SESSION['title'] = $_POST["title"] ;
    $_SESSION['article'] = $_POST["article"] ;
    
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
	header("Location: upload_preview.php");
	exit();
}
if (isset($_POST["button_clear"])) {
    if($_SESSION['state'] == "food") {
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