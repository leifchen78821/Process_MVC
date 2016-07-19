<?php

$link = mysql_connect("localhost" , "root" , "") or die(mysql_error()) ; 
$result = mysql_query("set names utf8" , $link);
mysql_selectdb("monographic",$link);  

if($_GET["ArticleID"] != "") {
    $_SESSION['uID'] = $_GET["ArticleID"] ;
}

$Member = "select * from UploadFile where uID = '" . $_SESSION['uID'] . "' ;" ;
$result = mysql_query($Member, $link);
$row = mysql_fetch_assoc($result);

$_SESSION['image'] = $row["ImageSite"] ;

if($_SESSION['change'] == 0) {
    $_SESSION['uID'] = $row["uID"] ;
    $_SESSION['Name'] = $row["Name"] ;
    $_SESSION['source'] = $row["MapSite"] ;
    $_SESSION['address_X'] = $row["Map_X"] ;
    $_SESSION['address_Y'] = $row["Map_Y"] ;
    $_SESSION['title'] = $row["Title"] ;
    $_SESSION['article'] = $row["Article"] ;
    
}

?>