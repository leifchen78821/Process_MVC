<?php

$link = mysql_connect("localhost" , "root" , "") or die(mysql_error()) ; 
$result = mysql_query("set names utf8" , $link);
mysql_selectdb("monographic",$link); 

date_default_timezone_set('Asia/Taipei');
$time = date("Y-m-d H:i:s") ;

$updateData = "UPDATE UploadFile SET 
				Time = '{$time}' ,
				MapSite = '{$_SESSION['source']}' ,
				Map_X = '{$_SESSION['address_X']}' ,
				Map_Y = '{$_SESSION['address_Y']}' ,
				ImageSite = '{$_SESSION['image']}' ,
				Title = '{$_SESSION['title']}' ,
				Article = '{$_SESSION['article']}'
				WHERE uID = '{$_SESSION['uID']}' ";  
					
$result = mysql_query($updateData, $link);

?>