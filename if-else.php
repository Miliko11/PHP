<!DOCTYPE html>
<html>
<head>
<title>IF ELSE</title>
<meta charset="utf-8" />
</head>
<body>

<?php
$a = 5;
if($a>0):
	echo "Переменная a больше нуля";
elseif($a < 0):
	echo "Переменная a меньше нуля";
else:
    echo "Переменная a равна нулю";
endif;
echo "<br>конец выполнения команды";
if (0) {} // false
if (-0.0) {} // false
if (-1) {} // true
if ("") {} // false (пустая строка)
if ("a") {} // false (непустая строка)
if (null) {} // false (значение отсутствует)

$a = 1;
$b = 2;
$z = $a < $b ? $a + $b : $a - $b;
echo "<br>$z</br>";

$a = 2;
switch($a):
	case "1":
		echo "Сложение";
		break;
	case "2":
		echo "Вычитание";
		break;
	default:
		echo "Действие по умолчанию";
		break;
endswitch;

$operation = match($a)
{
	1 => "сложение",
	2 => "вычитание",
	default => "действие по умолчанию",
};
echo $operation;

switch (8.0) {
  case "8.0":
    $result = "<br>строка";
    break;
  case 8.0:
    $result = "<br>число";
    break;
}
echo $result; // строка

match (8.0){
	"8.0" => $result = "<br>строка",
	8.0 => $result = "<br>число"
};
echo $result; // число
?>

</body>
</html>
