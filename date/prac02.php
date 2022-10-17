<h1>計算自己的生日</h1>

<!-- <?php
        $a = strtotime('now');

        $b = strtotime('2023-04-07');
        $ans = ceil(($b - $a) / 86400);

        ?>

<h3>距離我的生日 2023/04/07 還有 <?= $ans; ?>天</h3>

<div>包含起始日:<?= $ans; ?> 天</div>
<div>不包含起始日:<?= $ans - 1; ?>天</div>
<div>不包含結束日:<?= $ans - 2; ?> 天</div> -->
<?php
$birth = '2023-04-07';
$now = strtotime('now');
$diff = $now - strtotime($birth);
$days = abs(floor($diff / 86400));
$hours=abs(floor(($diff%86400)/3600));
$min=abs(floor(($diff%3600)/60));
$sec=abs($diff%60);
echo $days;
?>

<?php
if ($diff > 0) {
?>
    <h3>我的生日 4/7 已經過了<?= $days; ?>天<?=$hours;?>時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
} else {
?>
    <h3>距離我的生日 4/7 還有<?= $days; ?>天<?=$hours;?>時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
}
?>

