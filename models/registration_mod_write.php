<?php

$link = mysql_connect("localhost" , "root" , "") or die(mysql_error()) ; 
$result = mysql_query("set names utf8" , $link);
mysql_selectdb("monographic",$link); 

$insertData ="INSERT INTO MemberProfile (
                Name,
                Password,
                Gender,
                PhoneNumber)  
                VALUES ( 
                '{$_POST[txtUserName]}' , 
                '{$_POST[txtPassword]}' , 
                '{$_POST[txtGender]}' , 
                '{$_POST[txtPhoneNumber]}' )";  
$result = mysql_query($insertData, $link);

?>