<!DOCTYPE html>
<html>
<head>
<title>HELLOWORLD.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h1>
<?= "Первый сайт на PHP"; // быстрый вывод текста ?> 
</h1>
<div>
2 + 2 = <?= 2+2 ?>
</div>
<div>
<?php
// Все числа в десятичной системе имеют значение 28
$num_10 = 28; // десятичное число
$num_2 = 0b111000; // двоичное число (28)
$num_8 = 034; // восмьеричное число (28)
$num_16 = 0x1C; // шестнадцатиричное число (28)
echo "num_10 = $num_10 <br>";
echo "num_2 = $num_2 <br>";
echo "num_8 = $num_8 <br>";
echo "num_16 = $num_16 <br>";
?>
<?php
$a = 10;
$b = 5;
$result = "$a+$b <br>";
echo $result;
$result = '$a+$b';
echo $result;
$text = "<br> Модель \"Apple II\"";
echo $text;
$result = $a + 5;
echo "<p> $result</p>";

$a = 8 + 2; // 10, сложение
$a = 8 - 2; // 6, вычитание
$a = 8 * 2; // 16, умножение
$a = 8 / 2; // 4, деление
$a = 8 % 2; // 0, деление по модулю
$a = 8 ** 2; // 64, возведение в степень

$a = 12;
$b = ++$a; // $b равно 13, и тут же $a меняется на 13
echo "префиксный инкремент ";
echo "a = $a, b = $b</p>";

$a = 12;
$b = $a++; // $b равно 12
echo "постфиксный инкремент ";
echo "a = $a, b = $b</p>";

$a = 12;
$b = --$a; // $b равно 11
echo "префиксный декремент ";
echo " a = $a, b = $b</p>";
$a = 12;

$b = $a--; // $b равно 12
echo "постфиксный декремент ";
echo "a = $a, b = $b</p>";

$a = "Hello, ";
$b = "world";
echo $a . " " . $b . "!</p>";

$a = (2 == "2"); // true
$b = (2 === "2"); // false
$a = (2 != "2"); // false
$b = (2 !== "2"); // true

$a = 2 <=> 2; // 0
$b = 3 <=> 2; // 1
$c = 1 <=> 2; // -1
echo "a=$a, b=$b, c=$c</p>";

$a = (true && false); // false
$a = (true and false); // false

$b = (true || false); // true
$b = (true or false); // true

$c = !true; // false

$a = (true xor true); // false
$b = (false xor true); // true
$c = (false xor true); //false

$a = 4;
$b = 5;
echo $a & $b; // равно 4 - 100
echo $a | $b; // равно 5 - 101
$a = 5 ^ 4; // 101^100 = 001 - в десятичной системе 1
$b = 7 ^ 4; // 111^100 = 011 - в десятичной системе 3

$a = 4; // 00000100
$b = ~$a; // 11111011
echo "<p>$b</p>";

$a=12;
$a .= 5;
echo $a; // равно 125
// идентично
$b="12";
$b .="5"; // равно 125
?>
</div>
<div>
<?php
$id = 123;
echo "<p>id = $id</p>";
$id = "fhsjkfghjkwrteiu";
echo "<p>id = $id</p>";
?>
</div>
</body>
</html>
