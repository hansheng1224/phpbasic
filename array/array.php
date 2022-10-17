<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
    <h1>陣列宣告</h1>
    <?php
    // $a=array();
    $a=['a','星期二','569'];
    // $a=['day1'=>'星期一',
    //     'day2'=>'星期二',
    //     'day3'=>'星期三'];

    if(is_array($a)){
        echo '$a 是陣列';
        print_r($a);
        echo "<br>";
        // echo $a['day1'];
        for($i=0;$i<count($a);$i++){
            echo $a[$i]."<br>";
            // echo $a[$i];
            // echo "<br>";
        }
    }

    else echo '$a 不是陣列';
    
    echo serialize($a);
    
    ?>

    <h1>陣列宣告時給值並指定鍵值</h1>
    <?php
    $a=['day1'=>'星期一',
        'day2'=>'星期二',
        'day3'=>'星期三'];
    if(is_array($a)){
        echo '$a 是陣列';
        print_r($a);
        echo "<br>";
        // echo $a['day1'];
        for($i=1;$i<=count($a);$i++){
            echo $a['day'.$i]."<br>";
            // echo $a[$i];
            // echo "<br>";
        }
    }
    else echo '$a 不是陣列';

    echo "<hr>";
    echo array_search('星期三',$a);

    echo serialize($a);
    
    ?>
</body>
</html>