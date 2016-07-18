<?php

require("../models/page_dress_mod.php");
    
if ($_COOKIE["userName"] == "Guest") {
    $sUserName = "訪客";
}
else {
    $sUserName = $_COOKIE["userName"] ;
}

if (isset($_GET["logout"])) {
    setcookie("userName", "Guest");
    header("Location: page_dress.php");
    exit();
}

if (isset($_POST["IssuedArticle"])) {
    if ($_COOKIE["userName"] == "Guest") {
        echo "<script language='JavaScript'>";
        echo "alert('您尚未登入無法發文呦')";
        echo "</script>";
    }
    else {
        header("Location: upload.php");
        exit();
    }
}

?>