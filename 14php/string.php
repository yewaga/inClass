<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        h1 {
            display: inline;
        }
    </style>
</head>

<body>
    <h1>String</h1>
    <?php
    echo "<h3>Key Word Highlight</h3>" . "<br>";
    $s = "HUALIEN, Taiwan, April 3 (Reuters) - Taiwan's biggest earthquake in at least 25 years killed nine people on Wednesday and injured more than 900, while 50 workers travelling in minibuses to a hotel in a national park were missing.";
    echo "<br>" . "<hr>";

    echo "The target string is :<br> $s <br>";
    $front = rand(1, strlen($s) - 1);
    $tail = rand(1, strlen($s) - $front);
    $keyWord = mb_substr($s, $front, $tail);
    echo "front is: $front <br>";
    echo "tail is: $tail <br>";
    echo "<br>";

    echo "The key word is : <br> $keyWord";
    $tmp = "<h1>" . $keyWord . "</h1>";

    $highLight = str_replace($keyWord, $tmp, $s);
    echo "<br>";
    echo "The hight light result showen as : $highLight";

    ?>


</body>

tml>