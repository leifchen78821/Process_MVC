<?php

require("../models/article_mod.php");
    
if ($_COOKIE["userName"] == "Guest") {
    $sUserName = "訪客";
}
else {
    $sUserName = $_COOKIE["userName"] ;
}

if (isset($_GET["logout"])) {
    setcookie("userName", "Guest");
    header("Location: article.php?ArticleID=" . $_GET["ArticleID"]);
    exit();
}

if (isset($_POST["send_message"])) {
    if ($_COOKIE["userName"] == "Guest") {
        echo "<script language='JavaScript'>";
        echo "alert('您尚未登入無法發文呦')";
        echo "</script>";
    }
    else {
        require("../models/article_mod_insertmessage.php");
        header("Location: article.php?ArticleID=" . $_GET["ArticleID"]);
        exit();
    }
}
?>