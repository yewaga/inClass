<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div {
        margin:auto;
        border:solid 1px;
        display:inline-block;
        width:300px;
        height:300px;
    }

    .container{
        display:inline-block;
    }
div > .container{
     margin:auto;
        border:solid 1px;
        display:inline-block;
        width:300px;
        height:300px;
}

    </style>
</head>

<body>
<div>
<box class="container">
<h2>Golden Rectangle</h2>
   <?php
    // $n=10; //layers of diamond to print
    $sb="★"; //symbol to be printed
    $recLength=10;
    $recWidth=$recLength;
    $n=ceil($recLength+0);
    $lt=0; //left bound of to print
    $rt=ceil($lt+$recWidth);  //right bound to print
    $$recLength=ceil($recLength+0.0);
    $mask=ceil($n/2)*2;
    for($i=0;$i<=$recLength;$i++){ //i dominates layers
    if($i==0 ||$i==$recLength){
        for($j=0;$j<=$rt;$j++){ // j dominates numbers of stars
            if($j>=$lt && $j<=$rt){ // j restricted to lt&rt to print stars
                echo "$sb"; //print star
            }else{
                echo "<span style='color:#fff;'>$sb</span>"; //print blank(white-star)
            }
        }
        echo "<br>";

    }else{
                // $lt=abs($mask/2-$i)+1; //get the left-distance from mid-diamond to print stars
        // $rt=$mask-abs($mask-($mask/2+$i)); //get the right-distance from mid-diamond to print stars
        for($j=0;$j<=$rt;$j++){ // j dominates numbers of stars
            if($j==$lt || $j==$rt || (($i==$j || $i+$j==$rt))){ // j restricted to lt&rt to print stars
                echo "$sb"; //print star
            }else{
                echo "<span style='color:#fff;'>$sb</span>"; //print blank(white-star)
            }
        }

        echo "<br>";
    }
    }


    ?>
    </box>

    <box class="container">
<h2>Golden Rectangle</h2>
   <?php
    $n=10; //layers of diamond to print
    $sb="★"; //symbol to be printed
    $lt; //left bound of to print
    $rt;  //right bound to print
    $mask=ceil($n/2)*2;
    for($i=0;$i<=$mask;$i++){ //i dominates layers
        $lt=abs($mask/2-$i)+1; //get the left-distance from mid-diamond to print stars
        $rt=$mask-abs($mask-($mask/2+$i)); //get the right-distance from mid-diamond to print stars
        for($j=0;$j<$mask;$j++){ // j dominates numbers of stars
           if($i==0 || $i==$mask}}){f(){
             if($j>=$lt && $j<$rt){ // j restricted to lt&rt to print stars

           }else{
             if($j>=$lt && $j<$rt){ // j restricted to lt&rt to print stars
                echo "$sb"; //print star
            }else{
                echo "<span style='color:#fff;'>$sb</span>"; //print blank(white-star)
            }
           }
        }
        echo "<br>";
    }
    ?>
    </box>
    </div>
</body>
</html>