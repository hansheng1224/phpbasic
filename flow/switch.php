<?php
$score="90";
echo "你的成績為:".$score;
echo "<br>";
// if($score >= 0 && $score <60){
//     $level="E";
// }else if($score >= 60 && $score <70){
//         $level="D";
// }else if($score >= 70 && $score <80){
//         $level="C";
// }else if($score >= 80 && $score <90){
//         $level="B";
// }else if($score >= 90 && $score <60){
//         $level="A";
// }

$level=($score<60)?"E":($level=($score<70)?"D":($level=($score<80)?"C":
($level=($score<90)?"B":"A")));

echo "你的成績等級為:".$level;
echo "<br>";
switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break; 
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的努力";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "資料有誤或無心學業";            
}
?>