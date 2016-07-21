<?php
require("../controllers/index_con.php");
?>
<html>
    <meta charset="UTF-8">
    <head>
        <title>逢甲大玩客</title>
        <link rel="stylesheet" type="text/css" href="../views/css/menu.css">
    </head>
    <body>
        <form id="form1" name="form1" method="post">
            <div id = "menu_background" style = "background-image: url(img/index_background.png);">
                <div id = "titlename" name = "titlename">
                    逢甲大玩客
                </div>
                <a href = "connect4site.php">
                    <div id = "menu_left" style = "background-image: url(img/index_front_left.gif);">
                        <div id = "menu_left_img_1">遊客參觀</div>
                        <div id = "menu_left_img_2">點此進入</div>
                        <!--<div id = "menu_left_img_3"></div>-->
                        <!--<div id = "menu_left_img_4"></div>-->
                        <!--<div id = "menu_left_img_5"></div>-->
                        <!--<input type="submit" class="button_index" style="border:2px blue none;" name="btnPass" id="btnPass" value="點此進入" />-->
                    </div>
                </a>
                <a href = "login.php">
                    <div id = "menu_right" style = "background-image: url(img/index_front_right.gif);">
                        <div id = "menu_right_img_1">會員登入</div>
                        <div id = "menu_right_img_2">點此進入</div>
                        <!--<div id = "menu_right_img_3"></div>-->
                        <!--<div id = "menu_right_img_4"></div>-->
                        <!--<div id = "menu_right_img_5"></div>-->
                        <!--<input type="submit" class="button_index" style="border:2px blue none;" name="btnCus" id="btnCus" value="點此進入" />-->
                    </div>
                </a>
            </div>
        </form>
    </body>
</html>