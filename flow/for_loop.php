<h1>FOR 迴圈</h1>
<?php
for($i=0;$i<10;$i=$i+1){
    echo $i;
    echo " , ";
}
echo '$i 的最終值為'.$i;
echo "<br>";
?>

<h1>數列1,3,5,7,9...n</h1> 
<?php
$n=100;
for($j=1;$j<=$n;$j=$j+2){
    echo $j;
    echo " , ";
}
?>

<h1>數列10,20,30,40,50....n</h1>
<?php
$n=10;
for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo " , ";
}

?>

<h1>1-100的值數 3,5,7,11,13,17....97</h1>
<?php
$n=100;

for($i=3;$i<=$n;$i=$i+2){
    $chk=true;
    
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $chk=false;
            }
        }
        if($chk==true){
            echo $i;
            echo ",";
        }
    
    
}

// for($i=3;$i<$n;$i++){

?>
