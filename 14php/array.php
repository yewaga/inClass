<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
$a=["A","B","C"];
$b=["name"=>'Brown',"gender"=>'male',"years"=>'55' ];
print_r($a);
echo "<hr>";
print_r($b);
echo "<hr>";
echo serialize($a);
echo "<hr>";
echo serialize($b);
echo "<hr>";
echo "<h3>lorem to String</h3>";
$lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem numquam cupiditate sed expedita consectetur quibusdam veritatis, inventore error, necessitatibus laboriosam excepturi ut. Unde ipsum tempora quas maxime iste laboriosam repellat.";

echo "<h3>lorem to String</h3>";
$_imp_a = implode("--",$a);
echo $_imp_a;
echo "hr";

$ary_lorem = explode(" ",$lorem);
print_r($ary_lorem);
echo "<hr>";
echo serialize($ary_lorem);
    
echo "<hr>";
$grade=[
"a"=>["國文"=>95,"英文"=>64,"數學"=>70,"地理"=>90,"歷史"=>84],
"b"=>["國文"=>88,"英文"=>78,"數學"=>54,"地理"=>81,"歷史"=>71],
"c"=>["國文"=>45,"英文"=>60,"數學"=>68,"地理"=>70,"歷史"=>62],
"d"=>["國文"=>59,"英文"=>32,"數學"=>77,"地理"=>54,"歷史"=>42],
"e"=>["國文"=>71,"英文"=>62,"數學"=>80,"地理"=>62,"歷史"=>64]
];

print_r($grade);
?>
echo "<hr>";
<?php
echo "<h3>9X9 table</h3>";
for ($i=1;$i<=9;$i++){
    for ($j=1;$j<=9;$j++){
        if($i*$j<10){

            $_99tableA[]="$i*$j==".($i*$j);


        }
        else {
            $_99tableA[]="$i*$j=".($i*$j);


    }
}
}
echo "<pre>";
print_r($_99tableA);
echo "</pre>";
echo "<hr>";
echo "<h3>$99_Matrix To String</h3>";
$str_99=serialize($_99tableA);
echo "$str_99";
echo "<table>";
foreach($_99tableA as $index => $_99){ 
        if(($index)%9==0){
    echo "<tr>";
    }
    echo "<td>".$_99."||"."$index</td>";
        if(($index)%9==8){
    echo "</tr>";
    }
    }
echo "</table>";

echo "<hr>";

?>
</body>
</html>