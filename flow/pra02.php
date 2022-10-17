
<h1>尋找字元</h1>

<li>給定一個字串句子</li>
<li>給定一個單字或字母</li>
<li>尋找相符的內容</li>
<li>印出尋找到的單字或字母所在句子中的位置</li>

<?php
$str="Today is a good day";
$search="i";
$chk=false;
$pos=0;
while($chk==false){
    if($str[$pos]==$search){
        $chk=true;
    }
    $pos++;
    // $pos=$pos+1;
}
if($chk==true){
    echo "你要找的字元是".$search;
    echo "在位置".($pos-1);
}
else{
    echo "查無結果";
}

?>