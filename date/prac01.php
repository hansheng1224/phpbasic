<h1>計算日期間隔</h1>
設有兩個日期:
<div>2022-09-10</div>
<div>2022-10-21</div>
請計算間隔日期:
註:從開始日的凌晨0時0分0秒開始算到結尾日的晚上23:59:59
<?php

$a='2022-09-10';
$b='2022-10-21';
$aa=strtotime($a."0:0:0");
$bb=strtotime($b."23:59:59")+1;
$ans1=(($bb-$aa)/86400)-1;
$ans2=($bb-$aa)/86400;
$ans3=(($bb-$aa)/86400)-1-1;

echo "<br>";

$d=(strtotime($b)-strtotime($a))/24/60/60;

echo "一共間隔".$d."天";
?>

<div>包含起始日:<?=$ans2;?> 天</div>
<div>不包含起始日:<?=$ans1;?>天</div>
<div>不包含結束日:<?=$ans3;?> 天</div>