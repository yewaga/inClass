<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangel</title>
</head>
<body>
<?php
$n=14;
$sb="★"; //symbol to be printed
echo "<h1>Skewed Triangel</h1>";

for($i=0;$i<$n;$i++){
    for($j=0;$j<$i;$j++){
        echo "$sb";
    }
    echo "<br>";
}

echo "<h1>UpSideDown Triangel</h1>";

for($i=0;$i<$n;$i++){
    for($j=$n;$i<$j;$j--){
        echo "$sb";
    }
    echo "<br>";
}

echo "<h1>Equilateral Triangel</h1>";

for($i=0;$i<$n;$i++){
    for($j=$n;$j>$i+1;$j--){
         echo "<span style='color:#fff;'>$sb</span>";
         
         
    }
     for($k=0;$k<2*$i+1;$k++){
           echo "$sb";
           
    }
        
    echo "<br>";
    }


echo "<hr>";

echo "<h1>UpSideDownEquilateral Triangel</h1>";
//up part
for($i=0;$i<=$n;$i++){
    for($j=$n;$j>=$i+1;$j--){
         echo "<span style='color:#fff;'>$sb</span>";
    }
     for($k=0;$k<2*$i+1;$k++){
           echo "$sb";
    }
    echo "<br>";
    }
//down part
for($i=1;$i<=$n;$i++){
    for($j=0;$j<$i;$j++){
         echo "<span style='color:#fff;'>$sb</span>";
    }
     for($k=2*$n;$k>=2*$i;$k--){
           echo "$sb";
    }
    echo "<br>";
    }

// UPdown merge
/*
$m=$n*2-1;
for($i=0;$i<$m;$i++){
    for($j=0;$j<$m;$j++){
        if($i<$n && ($j<$n || $j>$n)){
            echo "<span style='color:#fff;'>$sb</span>";
        }else{
    echo "$sb";
    }
    echo "<br>";
}
*/




?>

    
</body>
</html>