<?php

$link = mysql_connect("localhost" , "root" , "") or die(mysql_error()) ; 
$result = mysql_query("set names utf8" , $link);
mysql_selectdb("monographic",$link); 

$Member = "select * from UploadFile where uID = '" . $_GET["ArticleID"] . "' ;" ;
$result = mysql_query($Member, $link);
$row = mysql_fetch_assoc($result);

$Message = "select * from Message where ArticleNumber = '" . $_GET["ArticleID"] . "' order by Time desc ;" ;
$MessageResult = mysql_query($Message, $link);

session_start();

?>