<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>99 multiplication table Testing 2024-04-15</title>
<style>
.agah1{
text-align:center;
font-size:35px;
}


table, td {
    margin-left:auto;
    margin-right:auto;
    border:3px solid white;
    //border-collapse: collapse;
    font-size:14px;
    text-align:center;
    
   }

tr:nth-child(even){
    background: #ddd;
}

tr:nth-child(odd){
    background: #eee;
}

td {
    padding:4px;
    vertical-align: center;
}

table {
    width:80%;
}



</style>
</head>
<body>
<h1 class="agah1">99 multiplication table</h1>
<?php

echo "<table>";
 
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        if(($i*$j)<10){
        echo "<td>"."$i ✕ $j = "."0".$i*$j."</td>";
        }
        else{  
        echo "<td>"."$i ✕ $j = ".$i*$j."</td>";    
        }
    }
    echo "</tr>";
    $j=1;
}
echo "</table>";


echo "<hr>";


echo "<hr>";
echo "<h1 class=agah1>"."99 multiplication table"."<span style='font-size:12px'>"."(v.1by1 Exclusived )"."</span>"."</h1>";
echo "<table>";

for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        if($i*$j==1){
            echo "<td Style='background-color:#000;'>". " "."</td>";}
            else{
        if($i==1){
            echo "<td Style='background-color:#000;color:white;'>". $j."</td>";
            }
        else{
            if($j==1){
            echo "<td Style='background-color:#000;color:white;'>". $i."</td>";
            }
            else{
            echo "<td>".$i*$j."</td>";   
            } 
        }
    }
      
    }echo "</tr>";
}
echo "</table>";
echo "<hr>";

echo "<h1 class=agah1>"."Skewed diagonal table"."<span style='font-size:12px'>"."(v. based by 9X9 )"."</span>"."</h1>";
echo "<table>";

for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        if($i<=$j){
echo " ";
        }
    else{
            if($i*$j==1){
            echo "<td Style='background-color:#000;'>". " "."</td>";}
            else{
        if($i==1){
            echo "<td Style='background-color:#000;color:white;'>". $j."</td>";
            }
        else{
            if($j==1){
            echo "<td Style='background-color:#000;color:white;'>". $i."</td>";
            }
            else{
            echo "<td>".$i*$j."</td>";   
            } 
        }
    }

    }

    }echo "</tr>";
}
echo "</table>";




echo "<table>";

for($i=1;$i<=9;$i++){h
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        if(($i*$j)<10){
        echo "<td>"."$j ✕ $i = "."0".$i*$j."</td>";
        }
        else{  
        echo "<td>"."$j ✕ $i = ".$i*$j."</td>";    
        }
    }
    echo "</tr>";
    $j=1;
}
echo "</table>";
echo "<hr>";

<h1>String Manipulation</h1>

<p>Will Israel retaliate against Iran, or hold back?</p>


?>

    
</body>
</html>