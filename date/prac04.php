<h1>利用迴圈來計算連續五個週一的日期</h1>

<p>今天是<?=date("Y-m-d l")?></p>
<p>接下來的連續五個週一為:</p>
<hr>

<?php

$w=(date('w')==0?7:date('w'));


// $w=date("w");
$diff=1-$w;
echo (1-1)."<br>";
echo (1-2)."<br>";
echo (1-3)."<br>";
echo (1-4)."<br>";
echo (1-5)."<br>";
echo (1-6)."<br>";
echo (1-7)."<br>";
echo $diff;


echo "<br>";
echo "<br>";

$firstDay=strtotime("+$diff days");
echo date("Y-m-d",$firstDay);
echo "<hr>";

for($i=0;$i<5;$i++){
    $sec=strtotime("+".($i+1)."week",$firstDay);
    echo date("Y-m-d l",$sec)."<br>";
}

?>