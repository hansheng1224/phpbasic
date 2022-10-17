<?php
// <h1>直角三角形</h1>
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
    echo "*";
    }
    echo "<br>";
}

echo "<br>";
// <h1>倒直角三角形</h1>

for($i=1;$i<=5;$i++){
    for($j=5;$j>=$i;$j--){
    echo "*";
    }
    echo "<br>";
}


?>

<h2>正三角形</h2>
<style>
    * {
        font-family:'Courier New', Courier, monospace;
    }
</style>
<?php
// $h=4;
$cnt=22;
$h=($cnt%2==0)?($cnt/2-1):(($cnt-1)/2);
for($i=1;$i<=$cnt;$i=$i+2){
    for($j=$h;$j>=1;$j--){
    echo "&nbsp";
    }
    for($k=1;$k<=$i;$k++)
    echo "*";
    echo "<br>";
    $h--;
}


for($i=1;$i<=5;$i++){
    for($k=5-$i;$k>0;$k--)
    echo "&nbsp";
    for($j=1;$j<=($i*2-1);$j++)
    echo "*";
    echo "<br>";
}
?>

<h2>菱形</h2>
<?php
for($i=1;$i<=5;$i++){
    for($k=5-$i;$k>0;$k--)
    echo "&nbsp";
    for($j=1;$j<=($i*2-1);$j++)
    echo "*";
    echo "<br>";
}
for($i=1;$i<=4;$i++){
    for($k=1;$k<=$i;$k++)
    echo "&nbsp";
    for($j=1;$j<=((5-$i)*2-1);$j++)
    echo "*";
    echo "<br>";
}

echo "type 2";
echo "<br>";
    
$cnt=22;
$h=($cnt%2==0)?($cnt/2-1):(($cnt-1)/2);
$g=$h;
for($i=1;$i<=$cnt;$i=$i+2){
    for($j=$h;$j>=1;$j--){
    echo "&nbsp";
    }
    for($k=1;$k<=$i;$k++)
    echo "*";
    echo "<br>";
    $h--;
}
for($i=1;$i<=$cnt-2;$i=$i+2){
    for($k=1;$k<=$i;$k++)
    echo "&nbsp";
    for($j=$cnt;$j>=$i;$j--){
    echo "*";
    }
    echo "<br>";
    $g--;
}

echo "菱形2";
echo "<br>";

$scale=9;
$scale=($scale%2==0)?$scale+1:$scale;
$mid=($scale-1)/2;
for($i=0;$i<$scale;$i++){
    if($i<=$mid){
        $spaces= $mid-$i; 
        $stars= $i*2+1;
    }else{
        $spaces= $i-$mid; 
        $stars= ($mid-$spaces)*2+1;
    }

    for($j=0;$j<$spaces;$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<$stars;$k++){
        echo "*";
    }
    echo "<br>";
}






echo "type 3";
echo "<br>";
$scale=18;
$cnt=($scale%2==0)?($scale+1):$scale;    
// $cnt=($cnt%2==0)?($cnt+1):$cnt;  
for($i=1;$i<=$cnt;$i=$i+2){
    for($j=$cnt;$j>$i;$j--){
    echo "&nbsp";
    }
    for($k=1;$k<=$i;$k++)
    echo "*";
    echo "<br>";
}
for($i=$cnt-2;$i>=1;$i=$i-2){
    for($j=1;$j<=($cnt-$i);$j++){
    echo "&nbsp";
    }
    for($k=1;$k<=$i;$k++)
    echo "*";
    echo "<br>";
}
?>
<h2>矩形</h2>
<?php
for($i=1;$i<=7;$i++){
    for($j=1;$j<=7;$j++)
    echo "*";
    echo "<br>";
}

echo "type2";
echo "<br>";
for($i=1;$i<=7;$i++){
    if($i==1 || $i==7){
        for($j=1;$j<=7;$j++)
            echo "*";
    }
    else{
        for($j=1;$j<=7;$j++){
            if($j==1 || $j==7){
                echo "*";
            }
            else echo "&nbsp";
        }
    }   
    echo "<br>";
}     
echo "type3";
echo "<br>";
$cnt=18;
for($i=1;$i<=$cnt;$i++){
    if($i==1 || $i==$cnt){
        for($j=1;$j<=$cnt;$j++)
            echo "*";
    }
    else{
        for($j=1;$j<=$cnt;$j++){
            if($j==1 || $j==$cnt){
                echo "*";
            }
            else echo "&nbsp";
        }
    }   
    echo "<br>";
}     


echo "type4";
echo "<br>";
$cnt=11;
for($i=1;$i<=$cnt;$i++){
    if($i==1 || $i==$cnt){
        for($j=1;$j<=$cnt;$j++)
            echo "<span style='color:red'>*</span>";
    }
    else{
        for($j=1;$j<=$cnt;$j++){
            if($j==1 || $j==$cnt)
            echo "<span style='color:red'>*</span>";
            else if($i==$j || $i+$j==$cnt+1)
                echo "<span style='color:green'>*</span>";
            else echo "&nbsp";
        }
    }   
    echo "<br>";
}     
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



