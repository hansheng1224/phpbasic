<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期函式</title>
</head>

<body>
    <h1>日期基礎函式</h1>
    <h2>date()</h2>
    <h2>時區設定date_default_timezone_set()</h2>

    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("西元Y年m月d日 H:i:s l");
    ?>

    <h2>strtotime()</h2>
    <?php
    $now = strtotime('now');
    $now = $now + (60 * 60 * 24) * 10;
    echo $now;
    echo "<br>";
    echo date("西元Y年m月d日 H:i:s l", $now);
    echo "<br>";

    $tomorrow=strtotime("-1 year");
    echo $tomorrow;
    echo "<br>";
    echo date("y-m-d H:i:s");
    echo "<br>";
    echo "<br>";
    echo date("y-m-d H:i:s" , $tomorrow);
    echo "<br>";
    $t=date("y-m-d",$tomorrow);

    ?>

    <h2>練習</h2>
    <ul>
        <li><a href="./prac01.php" target: _blank >練習一：</a></li>
        <li><a href="">練習二：</a></li>
        <li><a href="">練習三：</a></li>
        <li><a href="">練習四：</a></li>
        <li><a href="">練習五：</a></li>
    </ul>
</body>

</html>