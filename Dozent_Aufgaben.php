<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>1</h1>

<?php
//Ausgangssituation
$x = "MATZE";
echo $x;
?>
<br>

<?php
$a = "matze";
echo strtoupper($a);
$b = "MATZE";
echo strtolower($b);
$c = "matze";
echo ucfirst($c);
$d = "matze";
echo ucwords($d);
?>
<br>
<h1>2</h1><br>
<?php
$x = "082307";
echo chunk_split($x,2,":");
?>
<br>
<h1>3</h1><br>

<?php
$x= "The quick brown fox jumps over the lazy dog.";
if (str_contains($x, 'jumps'))
    echo "YesSir";
else echo "NopeDude";
?>
<br>
<h1>4</h1><br>
<?php
$x = 546545464546;
$x = (string) $x;
echo is_string($x);
?>

<br>
<h1>5</h1><br>
<?php

$x = "www.example.com/public_html/index.php";
$loesung = substr(strrchr($x, "/"), 1);
echo $loesung;
?>
<br>
<h1>6</h1><br>

<?php
$x = "rayy@example.com";
$loesung = strstr($x, "@", true);
echo $loesung;

?>

<br>
<h1>7</h1><br>
<?php
$x = "rayy@example.com";
$loesung = substr(strrchr($x, "."), 1);
echo $loesung;
?>

<h3> Musterlösung</h3>
<?php
// Musterlösung
$str1 = 'rayy@example.com';   
echo substr($str1, -3)."\n"; 

?>
<br>
<h1>8</h1><br>
<?php
$value1 = 65.45;$value2 = 104.35;$value3 = $value1 + $value2;echo number_format($value3,2,",",".") . " €";
?>


</body>
</html>


