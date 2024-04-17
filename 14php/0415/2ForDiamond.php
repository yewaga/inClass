<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only2_For_Loop_Diamond</title>
</head>
<body>
    <?php
    $n=10; //layers of diamond to print
    $sb="★"; //symbol to be printed
    $lt; //left bound of to print
    $rt;  //right bound to print
    $mask=ceil($n/2)*2;
    for($i=0;$i<=$mask;$i++){ //i dominates layers
        $lt=abs(ceil($mask/2)-$i)+1; //get the left-distance from mid-diamond to print stars
        $rt=$mask-abs($mask-(ceil($mask/2)+$i)); //get the right-distance from mid-diamond to print stars
        for($j=0;$j<$mask;$j++){ // j dominates numbers of stars
            if($j==$lt || $j==$rt){ // j restricted to lt&rt to print stars
                echo "$sb"; //print star
            }else{
                echo "<span style='color:#fff;'>$sb</span>"; //print blank(white-star)
            }
        }
        echo "<br>";
    }
    ?>
</body>
</html>