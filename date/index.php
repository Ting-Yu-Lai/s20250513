<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->

    <title>日期/時間</title>
</head>

<body>
    <h1>日期/時間</h1>
    <h2>基本函式使用</h2>
    <?php
    // date_default_timezone_set("Asia/Taipei");
    // echo "台北：";
    // echo date("Y-m-d H:i:s"); //取得當前日期時間
    // echo "<br>";
    // date_default_timezone_set("Asia/Tokyo");
    // echo "東京：";
    // echo date("Y-m-d H:i:s"); //取得當前日期時間
    // echo "<br>";
    // date_default_timezone_set("Asia/Bangkok");
    // echo "曼谷：";
    // echo date("Y-m-d H:i:s"); //取得當前日期時間
    // echo "<br>";
    // echo date("Y-m-d"); //將字串轉換為時間戳記
    ?>


    <h2>時間戳記</h2>
    <?php
    //當前時間戳記
    // time()

    // 字串轉換為時間戳記
    $datestring = "YYYY-MM-DD HH:MM:SS";
    // strtitime();


    //將時間戳記轉換換為日期字串
    $dateFromTimeStep = date("Y-m-d H:i:s", $timestamp);
    echo "時間戳記轉換為日期字串: $dateFromTimeStep <br>";
    ?>

    <h2>給定兩個日期，計算中間間隔天數</h2>
    <?php
    $date1 = "2025-05-01";
    $date2 = "2025-05-21";
    //當前時間戳記
    // time()

    // 字串轉換為時間戳記
    // strtotime();
    $date1string = strtotime($date1);
    echo $date1string . "<br>";
    $date2string = strtotime($date2);
    echo $date2string . "<br>";


    $diff = $date2string - $date1string;
    $day = ($diff / (60 * 60 * 24) - 1);
    echo "兩個日期間格 $day 天";


    //將時間戳記轉換換為日期字串
    // $dateFromTimeStep = date("Y-m-d H:i:s", $timestamp);
    // echo "時間戳記轉換為日期字串: $dateFromTimeStep <br>";
    ?>


    <h2>計算使用者下次生日還有多少時間</h2>
    <?php
    $userBirthday = "2001-11-10";
    explode ($userBirthday,"-");
    $date2 = "2025-05-21";
    //當前時間戳記
    // time()

    // 字串轉換為時間戳記
    // strtotime();
    $date1string = strtotime($date1);
    echo $date1string . "<br>";
    $date2string = strtotime($date2);
    echo $date2string . "<br>";


    $diff = $date2string - $date1string;
    $day = ($diff / (60 * 60 * 24) - 1);
    echo "兩個日期間格 $day 天";


    //將時間戳記轉換換為日期字串
    // $dateFromTimeStep = date("Y-m-d H:i:s", $timestamp);
    // echo "時間戳記轉換為日期字串: $dateFromTimeStep <br>";
    ?>


</body>

</html>