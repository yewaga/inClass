<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReverseArray</title>
</head>
<body>
    <h1>Reverse Array</h1>
    <?php
    $toReverse = [];
    $n=5;
    echo "The original array is :";
    for($i=0;$i<$n;$i++){
        $toReverse[$i]=rand(1,100);
        echo "$toReverse[$i] |";
    }
    echo "<br>";
    // $printR='fooBar';
    // $printR=print_r($toReverse);
    // echo "the original Array is :". $printR ;
    echo "<hr>";
$halfN=count($toReverse);
    echo "The reverse array of original is :";

    for($i=0;$i<ceil($n/2);$i++){
        $tmp=$toReverse[$i];
        $toReverse[$i]=$toReverse[$n-$i-1];
        $toReverse[$n-$i-1]=$tmp;
    }
   for($i=0;$i<$n;$i++){
        echo "$toReverse[$i] |";
    }
    echo "<br>";

    ?>
</body>
</html>