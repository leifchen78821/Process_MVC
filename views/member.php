<?php 

require("../controllers/member_con.php");

?>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>逢甲大玩客 - <?php echo $_GET["choose"] ; ?></title>
  <link rel="stylesheet" type="text/css" href="css/member.css">
  <link rel="stylesheet" type="text/css" href="css/page.css">
</head>

<body>

    <ul class="drop-down-menu">
        <li><p>其他去處　</p>
            <ul>
                <li><a href="connect4site.php">標題</a>
                </li>
                <li><a href="page_food.php">食</a>
                </li>
                <li><a href="page_dress.php">衣</a>
                </li>
                <li><a onclick="return confirm('即將外連至其他網頁，是否確認前往?');" href="http://www.trivago.com.tw/?cpt=324044602&r=&iRoomType=7&aHotelTestClassifier=&iIncludeAll=0&iGeoDistanceLimit=20000&aPartner=&iGeoDistanceItem=3240446&iPathId=408051&aDateRange%5Barr%5D=2016-07-24&aDateRange%5Bdep%5D=2016-07-25&iViewType=0&bIsSeoPage=false&bIsSitemap=false&">住</a>
                </li>
                <li><a onclick="return confirm('即將外連至其他網頁，是否確認前往?');" href="http://citybus.taichung.gov.tw/iTravel/">行</a>
                </li>
            </ul>
        </li>
        <li><p>　會員專區　</p>
            <ul>
                <li><a href="member.php?choose=1">帳號管理</a>
                </li>
                <li><a href="member.php?choose=2">文章管理</a>
                </li>
                <li><a href="member.php?choose=3">留言管理</a>
                </li>
            </ul>
        </li>
    </ul>
    
    <br>
    
    <div id = "backgroundmember">
        <?php if($_GET["choose"] == "1"): ?>
        <img class = "front_pic_member" src="img/member01.png">
        <div id = "member01" style = "background-image: url(img/memberback.png);">
            <div id = "member01_1">
                帳號 : <?php echo $row01["Name"] ?><br><br>
                <form data-ajax="false" id="form1" name="form1" method="post">密碼 :　
                            <input type="submit" name="button_changePassword" id="button_changePassword" value="修改密碼" />
                       </form>
                性別 : <?php if($row01["Gender"] == 1) : ?>
                        紳士
                       <?php else : ?>
                        淑女
                       <?php endif ?>
                        <br><br>
                電話 : <?php echo $row01["PhoneNumber"] ?><br>
            </div>
        </div>
        <?php elseif($_GET["choose"] == "2"): ?>
        <img class = "front_pic_member" src="img/member02.png">
        <div id = "member02" style = "background-image: url(img/memberback.png);">
            <div id = "member02_1">
                <div style="clear:both;"></div>
                <?php while($row02 = mysql_fetch_assoc($result02)) : ?>
                <div style = "width:100% ; border-bottom: 2px solid gray ; border-radius:5%; float:left ;">
                    <br>
                    發布時間 : <?php echo $row02["Time"] ?><br>
                    版別 : <?php if($row02["State"] == "food") : ?>
                            食
                           <?php else : ?>
                            衣
                           <?php endif ?><br>
                    標題 : <?php echo $row02["Title"] ?><br>
                    <br>
                    <a href = "article.php?ArticleID=<?php echo $row02["uID"]?>"><div id = "pic_go"><img src="img/go.gif" width="100" >前去看看</div></a>
                    <a href = "update.php?ArticleID=<?php echo $row02["uID"]?>"><div id = "pic_go"><img src="img/changearticle.gif" width="100"  >修改文章</div></a>
                </div>
                <?php endwhile ?>
                <div style="clear:both;"></div>
            </div>
        </div>
        <?php else: ?>
        <img class = "front_pic_member" src="img/member03.png">
                <div id = "member03" style = "background-image: url(img/memberback.png);">
            <div id = "member03_1">
                <div style="clear:both;"></div>
                <?php for($j = 0 ; $j < $i ; $j++) : ?>
                <div style = "width:100% ; border-bottom: 2px solid gray ; border-radius:5%; float:left ;">
                    <br>
                    發布時間 : <?php echo $message03[$j][0] ?><br>
                    版別 : <?php if($message03[$j][4] == "food") : ?>
                            食
                           <?php else : ?>
                            衣
                           <?php endif ?><br>
                    留言文章 : <?php echo $message03[$j][3] ?><br>
                    留言內容 : <?php echo $message03[$j][2] ?><br>
                    <br>
                    <a href = "article.php?ArticleID=<?php echo $message03[$j][1]?>"><div id = "pic_go"><img src="img/go.gif">前去看看</div></a>
                </div>
                <?php endfor ?>
                <div style="clear:both;"></div>
            </div>
        </div>
        <?php endif ?>
    </div>
        
</body>
</html>