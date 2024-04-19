<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerBall</title>
    <style>
    table {
        border:solid 1px;
    }
    </style>

</head>
<body>
<p><img src="/" alt=""></p>
    <h3>Powerball</h3>
    <?php
    $play=10000;
$i=0;
    $pBall=[1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0,32=>0,33=>0,34=>0,35=>0,36=>0,37=>0,38=>0];
    while($i<$play){
        $tmp=rand(1,38);
        foreach($pBall as $index=>$bCount){
            if($tmp==$index){
                $pBall[$index]++;
            }
        }
        $i++;
    }
echo "<table>";
echo "<tr>";
// echo "<th>";
for ($i=1;$i<=38;$i++){
    echo "<th>".$i."</th>";
}
echo "</tr>";
echo "<tr>";
foreach($pBall as $index => $bcount){
           echo "<td>".$bcount."</td>";
    }
echo "</tr>";
echo "</table>";


echo "<pre>";
print_r($pBall);
echo "</pre>";

    // while($i<=$play){
    //     $ball=rand(1,38);
    //     if(in_array($ball,$pBall)){

    //     }else{
    // $pBall[]=$ball;
    //     }
    // $i++;
       
    // }
    ?>
</body>
</html>