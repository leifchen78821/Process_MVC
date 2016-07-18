<?php

require("../models/registration_mod_check.php");

if (isset($_POST["btnSend"])) {
  $checknum = 0 ;
  $sUserName = $_POST["txtUserName"];
  $sUserPassword = $_POST["txtPassword"];
  $sUserPasswordcheck = $_POST["txtPasswordcheck"];
  
  if (trim($sUserName) == "") {
    echo "<script language='JavaScript'>";
    echo "alert('帳號不可空白')";
    echo "</script>";
  }
  else if (trim($sUserPassword) == "") {
    echo "<script language='JavaScript'>";
    echo "alert('密碼不可空白')";
    echo "</script>";
  }
  else {
    if($sUserPasswordcheck != $sUserPassword) {
      echo "<script language='JavaScript'>";
      echo "alert('密碼確認與設定密碼不一致')";
      echo "</script>";
    }
    else {
      
      while ($row = mysql_fetch_assoc($memberresult)) {
        if($sUserName == $row["Name"]) {
          $checknum = 1 ;
        }
      }
      if($checknum == 1) {
        echo "<script language='JavaScript'>";
        echo "alert('此帳號已被使用')";
        echo "</script>";
      }
      else {
        require("../models/registration_mod_write.php");
        echo "<script language='JavaScript'>";
        echo "alert('加入會員成功! 系統將自動跳轉至登入頁');location.href='login.php';";
        echo "</script>";
      }
    }
  }
}

?>