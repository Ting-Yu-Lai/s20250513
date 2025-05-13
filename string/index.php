<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            border-bottom: 1px solid gray;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .smalltitle {
            font-size: 30px;
            margin-top: 30px;
        }

        .text {
            padding-left: 40px;
            font-size: 20px;
        }


        .box {
            /* background-color: blue;  */
            width: 80%;
            margin: auto;
            height: 60vh;
            text-align: justify;
        }

        .footer {
            width: 100%;
            height: 20vh;
            background-color: gray;
        }
    </style>
</head>

<body>
    <h1>字串處理</h1>
    <div class="box">
        <p class="smalltitle">字串取代</p><br>
        <p class="text">將"aaddw1123"改成"*********" </p>
        <?php
        echo ("<br>");
        $str = "haiudsfhewiurf";
        $newstr = str_repeat("*", strlen($str));
        echo "未取代前：" . $str . "<br>";
        echo "取代後：" . $newstr . "<br>";
        echo ("<br>");
        ?>
    </div>

    <div class="box">
        <p class="smalltitle">字串分割</p><br>
        <p class="text">將”this,is,a,book”依”,”切割後成為陣列 </p>
        <?php
        echo ("<br>");
        $str = "this,is,a,book";
        $newstr = explode(",", $str);
        echo "未分割前：" . $str . "<br>";
        echo "分割後：";
        print_r($newstr);
        echo "<br>";
        echo ("<br>");
        ?>
    </div>

    <div class="box">
        <p class="smalltitle">字串組合</p><br>
        <p class="text">將上例陣列重新組合成“this is a book” </p>
        <?php
        echo ("<br>");
        $combinestr = join(" ", $newstr);
        // $newstr = explode (",",$str);
        echo "未組合前：";
        print_r($newstr);
        echo "<br>";
        echo "組合後：" . $combinestr . "<br>";
        echo ("<br>");
        ?>
    </div>

    <div class="box">
        <p class="smalltitle">子字串取用</p><br>
        <p class="text">將” The reason why a great man is great is that he resolves to be a great man” 只取前十字串成為 ” The reason… </p>
        <?php
        echo ("<br>");
        $oldstr = "The reason why a great man is great is that he resolves to be a great man";
        $newstr = substr($oldstr, 0, 10) . "...";
        echo "未取用前：";
        echo ($oldstr);
        echo "<br>";
        echo "取用後：" . $newstr . "<br>";
        echo ("<br>");
        ?>
    </div>

    <div class="box">
        <p class="smalltitle">尋找字串與HTML、css整合應用</p><br>
        <p class="text">給定一個句子，將指定的關鍵字放大</p>
        <p class="text">“學會PHP網頁程式設計，薪水會加倍，工作會好找”</p>
        <p class="text">請將上句中的 <strong>“程式設計” </strong>放大字型或變色.</p>
        <?php
        echo ("<br>");
        $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
        $keyword = "程式設計";
        $style = "font-size:2em; color:red";
        // “學會PHP網頁<span style="font-size:28px; color:red">程式設計</span>，薪水會加倍，工作會好找”
        $newstr = str_replace("$keyword", "<span style='$style'>$keyword</span>", $str);
        echo $newstr;
        ?>
    </div>

    <div class="box">
        <p class="smalltitle">尋找字串與HTML、css整合應用</p><br>
        <p class="text">自行定義句中的 <strong>"關鍵詞” </strong>調整style.</p>
        <?php
        echo ("<br>");
        $str = "豪鬼，是卡普空的格鬥遊戲《快打旋風系列》中的角色，有著「拳之極者」、「鬼神屠滅之拳」的稱號。豪鬼早年與哥哥「剛拳」一起在師傅「轟鐵」的門下習武。豪鬼年紀輕輕就顯露出其才能以及對武學頂點近乎沒有原則的追求。他對於暗殺拳格鬥流殘忍一面的殺人藝術痴迷不已，面對這樣一個瘋狂的弟弟，剛拳也根本無計可施。豪鬼在殺意波動催生的殺戮欲望的驅使下，無意中激發體內的「殺意波動」殺害師傅而失蹤，一味往修羅之道墮落下去。最終兄弟兩人在獄炎島相遇，剛拳以一招金剛身防住殺意波動，然後以一記昇龍拳擊倒了弟弟豪鬼。正當剛拳以為戰鬥結束時，豪鬼的殺意波動完全覺醒，剛拳被喪失理智的豪鬼以一招「瞬獄殺」殺死（剛拳在快打旋風IV確認復出，並沒有被豪鬼殺死而是在獄炎島決戰中生還）。親眼目睹恩師被殺的隆和肯·馬斯達斯發誓要為師父報仇。然而豪鬼根本不以為意，在他眼中只有世界最強戰士才有資格與他一戰。在獄炎島決戰之後，豪鬼繼續在全世界尋找最強戰士決鬥，以不斷突破自己的極限[1]。";
        echo $str;
        $keyword1 = "豪鬼";
        $keyword2 = "剛拳";
        $style1 = "font-size:1.2em; color:red";
        $style2 = "font-size:1.2; color:blue";
        // “學會PHP網頁<span style="font-size:28px; color:red">程式設計</span>，薪水會加倍，工作會好找”
        $newstr = str_replace("$keyword1", "<span style='$style1'>$keyword1</span>", $str);
        $newstr = str_replace("$keyword2", "<span style='$style2'>$keyword2</span>", $newstr);
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        echo $newstr;
        ?>
    </div>

    <div class="box">
        <p class="smalltitle">尋找字串與HTML、css整合應用</p><br>
        <p class="text">自行定義句中的 <strong>"關鍵詞” </strong>調整style. 運用迴圈的方式替換</p>
        <?php
        echo ("<br>");
        $str = "豪鬼，是卡普空的格鬥遊戲《快打旋風系列》中的角色，有著「拳之極者」、「鬼神屠滅之拳」的稱號。豪鬼早年與哥哥「剛拳」一起在師傅「轟鐵」的門下習武。豪鬼年紀輕輕就顯露出其才能以及對武學頂點近乎沒有原則的追求。他對於暗殺拳格鬥流殘忍一面的殺人藝術痴迷不已，面對這樣一個瘋狂的弟弟，剛拳也根本無計可施。豪鬼在殺意波動催生的殺戮欲望的驅使下，無意中激發體內的「殺意波動」殺害師傅而失蹤，一味往修羅之道墮落下去。最終兄弟兩人在獄炎島相遇，剛拳以一招金剛身防住殺意波動，然後以一記昇龍拳擊倒了弟弟豪鬼。正當剛拳以為戰鬥結束時，豪鬼的殺意波動完全覺醒，剛拳被喪失理智的豪鬼以一招「瞬獄殺」殺死（剛拳在快打旋風IV確認復出，並沒有被豪鬼殺死而是在獄炎島決戰中生還）。親眼目睹恩師被殺的隆和肯·馬斯達斯發誓要為師父報仇。然而豪鬼根本不以為意，在他眼中只有世界最強戰士才有資格與他一戰。在獄炎島決戰之後，豪鬼繼續在全世界尋找最強戰士決鬥，以不斷突破自己的極限[1]。";
        echo $str;


        $keyword = ["豪鬼", "剛拳"];
        $style = ["font-size:1.5em; color:red",  "font-size:1.5em; color:blue"];

        $newstr = $str;

        foreach ($keyword as $index => $keyword) {
            $newstr = str_replace("$keyword", "<span style='$style[$index]'>$keyword</span>", $newstr);
        }
        // “學會PHP網頁<span style="font-size:28px; color:red">程式設計</span>，薪水會加倍，工作會好找”
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo $newstr;
        ?>
    </div>

    <div class="box">
        <p class="smalltitle">尋找字串與HTML、css整合應用</p><br>
        <p class="text">自行定義句中的 <strong>"關鍵詞” </strong>調整style，並增加url. 運用迴圈的方式替換</p>
        <?php

        //為keyword 加上 url

        echo ("<br>");
        $str = "豪鬼，是卡普空的格鬥遊戲《快打旋風系列》中的角色，有著「拳之極者」、「鬼神屠滅之拳」的稱號。豪鬼早年與哥哥「剛拳」一起在師傅「轟鐵」的門下習武。豪鬼年紀輕輕就顯露出其才能以及對武學頂點近乎沒有原則的追求。他對於暗殺拳格鬥流殘忍一面的殺人藝術痴迷不已，面對這樣一個瘋狂的弟弟，剛拳也根本無計可施。豪鬼在殺意波動催生的殺戮欲望的驅使下，無意中激發體內的「殺意波動」殺害師傅而失蹤，一味往修羅之道墮落下去。最終兄弟兩人在獄炎島相遇，剛拳以一招金剛身防住殺意波動，然後以一記昇龍拳擊倒了弟弟豪鬼。正當剛拳以為戰鬥結束時，豪鬼的殺意波動完全覺醒，剛拳被喪失理智的豪鬼以一招「瞬獄殺」殺死（剛拳在快打旋風IV確認復出，並沒有被豪鬼殺死而是在獄炎島決戰中生還）。親眼目睹恩師被殺的隆和肯·馬斯達斯發誓要為師父報仇。然而豪鬼根本不以為意，在他眼中只有世界最強戰士才有資格與他一戰。在獄炎島決戰之後，豪鬼繼續在全世界尋找最強戰士決鬥，以不斷突破自己的極限[1]。";
        echo $str;


        $keyword = ["豪鬼", "剛拳"];
        $style = ["font-size:1.5em; color:red",  "font-size:1.5em; color:blue"];
        $url = ["https://zh.wikipedia.org/zh-tw/%E8%B1%AA%E9%AC%BC","https://mysterious-world.fandom.com/zh/wiki/%E5%89%9B%E6%8B%B3?variant=zh-tw",""];
        $newstr = $str;

        foreach ($keyword as $index => $keyword) {
            $withurl = "<a href = '$url[$index]'>$keyword</a>";
            $newstr = str_replace("$keyword", "<span style='$style[$index]'>$withurl</span>", $newstr);
        }
        // “學會PHP網頁<span style="font-size:28px; color:red"><a href='url'>程式設計</a></span>，薪水會加倍，工作會好找”
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo $newstr;
        ?>
    </div>

    <div class="footer">

    </div>
</body>

</html>