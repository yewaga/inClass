<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>
<h3>String searching</h3>
echo "<form>"";
<label>The original string is :<input type="text">Will Israel retaliate against Iran, or hold back?</input></p>
<p>The Target string is :<input type="text">Israel</input></p>
echo "</form>"
<?php
$str="Will Israel retaliate against Iran, or hold back?";

$target="Israel";
$rhead=0; //reading head
$sLen=mb_strlen($target); //length of searching target string

while($target!=mb_substr($str,$rhead,$sLen)){
    $rhead++;
}
if($rhead==mb_strlen($str)){
    echo "<b>No Found!</b>";
}else{
    echo "Success ! The target string is at position of <b><i>$rhead</i></b>";
}


?>
</body>
</html>