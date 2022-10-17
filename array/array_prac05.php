<?php

$a=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'] ;
$b=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$years=[];

for($i=0;$i<60;$i++){
    $years[$a[$i%10]][$b[$i%12]]=$i;
}

echo "<pre>";
print_r($years);
echo "</pre>";

echo "丁亥".$years['丁']['亥'];

$years2=[];

for($i=0;$i<60;$i++){
    $years2[$a[$i%10].$b[$i%12]]=$i;
}
echo "<pre>";
print_r($years2);
echo "</pre>";
echo "丁亥".$years2['丁亥'];

$years3=[];

for($i=0;$i<60;$i++){
    $years3[$i]=$a[$i%10].$b[$i%12];
}
echo "<pre>";
print_r($years3);
echo "</pre>";

$years4=[];
$startYear=1024;
$inputYear=1025;

for($i=0;$i<60;$i++){
    $years4[$i]=$a[$i%10].$b[$i%12];
}



echo "<pre>";
print_r($years4);
echo "</pre>";

echo "西元{$inputYear}年是".$years4[($inputYear-$startYear)%60]."年";



$year=13;
$ai=$aj=$year%10;
$bi=$bj=$year%12;
for($i=0;$i<count($a);$i++){
    if($aj%10==0)
    $aj=0;    
    $a1[$aj]=$a[$i];
    $aj++;
    echo $aj;
}   
for($i=0;$i<count($b);$i++){
    if($bj%12==0)
    $bj=0;
    $b1[$bj]=$b[$i];
    $bj++;
    echo $bj;
}   
echo "year ".$year."是".$a1[$ai].$b1[$bi]."年";
echo $ai.$aj,$bi,$bj;

// echo count($a);
// echo end($a);
print_r($a1);
print_r($b1);

echo current($a)."<br>";
// echo pos($a)."<br>";
// echo next($a)."<br>";
// echo pos($a)."<br>";
// echo current($a)."<br>";
// echo next($a)."<br>";
// echo prev($a)."<br>";
// echo end($a)."<br>";
// echo reset($a)."<br>";


?>