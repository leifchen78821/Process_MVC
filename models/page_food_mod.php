<?php

$link = mysql_connect("localhost" , "root" , "") or die(mysql_error()) ; 
$result = mysql_query("set names utf8" , $link);
mysql_selectdb("monographic",$link); 

$Member = "select * from UploadFile where State = 'food' order by Time desc ;" ;
$result = mysql_query($Member, $link);

session_start();
$_SESSION['state'] = "food";

?>