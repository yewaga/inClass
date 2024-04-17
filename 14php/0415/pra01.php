<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習</title>
</head>
<body>
<h2>判斷成績及格人數</h2>
<h3>給定一個成績數字，判斷是否（及格）分</h3>
<?php
$score=70;
echo "成績為".$score."及格";
echo "<br>";

$result='';
if($score>=60){
    $result="及格";
}else{
    $result="不及格";
}
echo "判斷為".$result;


echo "<h2>區分分成績等級</h2>";


echo    "<li>給定一個成績數字，根據成績所在的區間，給定等級</li>";
echo    "<li>0 ~ 59 => E</li>";
echo    "<li>60 ~ 69 => D</li>";
echo    "<li>70 ~ 79 => C</li>";
echo    "<li>80 ~ 89 => B</li>";
echo    "<li>90 ~ 100 => A</li>";

$grade='70';
if($grade>=90){
echo "成績區段"."<span style='color:#67f;'>A</span>";
}else if($grade>=80){
echo "成績區段"."<span style='color:#87f;'>B</span>";
}else if($grade>=70){
echo "成績區段"."<span style='color:#a7f;'>C</span>";
}else if($grade>=60){
echo "成績區段"."<span style='color:#d7f;'>D</span>";
}else if($grade>=50){
echo "成績區段"."<span style='color:#f7f;'>E</span>";
}
if($grade>=50){

}else{
echo "成績區段"."<span style='color:#f00'>FFF</span>";
}




echo "<br>";
echo "<br>";
echo "<br>";


echo "<h2>判斷是否為閏年</h2>";
$year=1328;
echo "西元年為".$year;
if($year%400==0){echo "Leap Year";}
if($year%4==0){
                 if($year%100==0){echo "Normal year";}
                  else{echo "Leap year";}       
               }

echo "<hr>";


for ($x = 0; $x < 50;$x++ ) {
$x++;
echo "$x. ";
}

echo "<hr>";
for ($x = 0; $x < 50; ) {
$x=$x+10;
echo "$x. ";
}


echo "<hr>";
$n=100;
$i=2;
//for ($x = 0; $n < 100;$n++ ) {
do {
if($n%$i)==0){
echo "$n";
}
$i++;
}while($n<=($n/2));


?>


</body>
</html>