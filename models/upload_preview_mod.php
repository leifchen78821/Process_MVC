<?php

$link = mysql_connect("localhost" , "root" , "") or die(mysql_error()) ; 
$result = mysql_query("set names utf8" , $link);
mysql_selectdb("monographic",$link);  

session_start();

$NameArticleNumber = 1 ;
$Member = "select * from UploadFile where Name = '" . $_SESSION['Name'] . "' ;" ;
$result = mysql_query($Member, $link);
while ($row = mysql_fetch_assoc($result)) {
    $NameArticleNumber++;
}

?>