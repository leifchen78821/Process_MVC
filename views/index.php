<?php

require("../controllers/index_con.php");

?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
        <title>逢甲大玩客</title>
        <link rel="stylesheet" type="text/css" href="../views/css/menu.css">
    </head>
    <body>
        <form id="form1" name="form1" method="post">
        <div id = "menu_background" style = "color: white ; background-image: url(img/index_background.png);">逢甲大玩客
            <div id = "menu_left" style = "color: white;">訪客參觀<br><br><br>
                <div id = "menu_left_img_1"></div>
                <div id = "menu_left_img_2"></div>
                <div id = "menu_left_img_3"></div>
                <div id = "menu_left_img_4"></div>
                <div id = "menu_left_img_5"></div>
                <input type="submit" class="button_index" style="border:2px blue none;" name="btnPass" id="btnPass" value="點此進入" />
            </div>
            <div id = "menu_right" style = "color: white;">會員登入<br><br><br>
                <div id = "menu_right_img_1"></div>
                <div id = "menu_right_img_2"></div>
                <div id = "menu_right_img_3"></div>
                <div id = "menu_right_img_4"></div>
                <div id = "menu_right_img_5"></div>
                <input type="submit" class="button_index" style="border:2px blue none;" name="btnCus" id="btnCus" value="點此進入" />
            </div>
        </div>
        </form>
    </body>
</html>