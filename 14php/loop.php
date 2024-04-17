<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
echo "The number is: $x <br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";


for ($x = 0; $x <= 10; $x=2*$x+1) {
    //$x=2*$x+1;
echo "The number is: $x <br>";
}
?>

<h2>while Loop</h2>
<?php
$score=10;
echo "原始成績＝".$score;
while($score<60){
    $score=$score+10;
}
echo "<br>";
echo "調整結果＝".$score;

?>
<h2>Nested Loop</h2>
<?php
for($i=0;$i<10;$i++){
echo $i*10;
if($i>5){
    echo "已執行一半...";
    break;
}
    echo "<br>";
}
?>

<h2>how fast is php</h2>

<?php
for($i=0.1;$i<1000000000000;$i=$i+0.00000000001){
echo $i*10;
if($i>50000000000){
    echo "已執行一半...";
    break;
}
else {
    echo "time to die";
    break;
}
 
}
?>
<h2>constant logic test</h2>
<?php
$a=-1
if($a > 1) echo true;
else echo false;







</body>
</html>