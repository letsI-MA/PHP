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
<?php
echo "<br>";
//var_dump test

$x = 5;
var_dump($x);
echo "<br>";
//single and double quotes
//Double quoted strings perform action on special characters.

//E.g. when there is a variable in the string, it returns the value of the variable:
echo "<br>";
$name = 'Linus';
echo '<h1>Hello $name </h1>';
echo "<h1>Hello $name</h1>";

echo "<br>";

$x = "John";
echo "Hello $x";

echo "<br>";

//Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:

$x = "John";
echo 'Hello $x';
echo "<br>";
echo strlen("Hello");
echo "<br>";
// OOP

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

echo "<br>";


?>




<pre>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>Note that when casting a Boolean into string it gets the value "1", and when casting NULL into string it is converted into an empty string "".</p>

</body>
</html>
</body>
</html>
<html>
<body>

<pre>
<?php
$a = 5;       // Integer
$b = 5.34;// Float
echo "<br>";
echo(round($b));
echo "<br>";
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?> 
</pre>

<p>Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function convert strings into the number 0.</p>

</body>
</html>

<h1>//Arrays\\</h1> <br>

<html>
<body>

<pre>
<?php
$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
?> 
</pre>

<p>Indexed arrays converts into objects with the index number as property name and the value as property value.</p>

<p>Associative arrays converts into objects with the keys as property names and values as property values.</p>

</body>
</html>










