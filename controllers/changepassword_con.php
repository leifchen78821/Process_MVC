<?php

header("Content-Type:text/html; charset=utf-8");

if (isset($_POST["btnOK"])) {
    $sUserName = $_POST["txtUserName"];
    $sUserPassword = $_POST["txtPassword"];
    $check = 0 ;

    require("../models/changepassword_mod.php");

    while ($row = mysql_fetch_assoc($result)) {
        if($sUserName == $row["Name"] && $sUserPassword == $row["Password"]) {
            setcookie("userName", "$sUserName");
            header("Location: changepassword_ch.php");
            $check = 1 ;
            exit();
        }
    }

    if($check != 1) {
        echo "<script language='JavaScript'>";
        echo "alert('帳號或密碼輸入有誤');location.href='changepassword.php';";
        echo "</script>";
        exit();
    }
}

?>