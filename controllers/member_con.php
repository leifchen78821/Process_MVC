<?php 

if ($_COOKIE["userName"] == "Guest") {
	echo "<script language='JavaScript'>";
	echo "alert('你不應該來這呦!!!');location.href='index.php';";
	echo "</script>";
}
else {
	header("Content-Type:text/html; charset=utf-8");
	
	require("../models/member_mod.php");
	
	if (isset($_POST["button_changePassword"]))
	{
		header("Location: changepassword.php");
		exit();
	}
	
	if(isset($_GET["delete"])) {
	require("../models/member_mod_deletearticle.php");
	echo "<script language='JavaScript'>";
	echo "alert('刪除成功!!!');location.href='member.php?choose=2';";
	echo "</script>";
	}
} 

?>