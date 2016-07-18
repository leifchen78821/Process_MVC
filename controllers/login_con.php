<?php

header("Content-Type:text/html; charset=utf-8");
  
if (isset($_POST["btnOK"])) {
    $sUserName = $_POST["txtUserName"];
    $sUserPassword = $_POST["txtPassword"];
    $check = 0 ; //避免重複查詢資料庫回報alert，設此參數讓資料庫查詢完畢後再alert一次

    require("../models/login_mod.php");
    
    while ($row = mysql_fetch_assoc($result)) {
        if($sUserName == $row["Name"] && $sUserPassword == $row["Password"]) {
            setcookie("userName", "$sUserName");
            header("Location: connect4site.php");
            $check = 1 ;
            exit();
        }
    }
    if($check != 1) {
        echo "<script language='JavaScript'>";
        echo "alert('帳號或密碼輸入有誤');";
        echo "</script>";
    }
}
    
if (isset($_POST["btnRegis"])) {
	header("Location: registration.php");
	exit();
}

?>