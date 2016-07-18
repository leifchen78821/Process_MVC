<?php

setcookie("userName", "Guest");

if (isset($_POST["btnPass"])) {
	header("Location: connect4site.php");
	exit();
}

if (isset($_POST["btnCus"])) {
	header("Location: login.php");
	exit();
}

?>