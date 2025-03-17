<?php
$numbers = array(); // пустой массив
$numbers = []; // пустой массив
$numbers = [1, 2, 3, 4];
$numbers = array(1, 2, 3, 4);
$numbers = [1, 4, 9, 16];
echo $numbers[2]; // 9, так как это индекс(начинается считаться с нуля)
$numbers[1] = 6; // изменяем 4 на 6
echo $numbers[1]; // 6
$numbers[5] = 36;
echo $numbers[5]; // 36
$numbers[] = 49;
echo $numbers[6]; // 49+
echo "<p>";
print_r($numbers);
echo "</p>";
$numbers = 0;
$numbers = [0=>1, 1=>4, 3=>16, 2=>9]; // ключ => значение
print_r($numbers);
echo "<p>";
$numbers = [4=> 16, 25, 36, 49, 64];
print_r($numbers);
echo "</p>";
$users = ["Tom", "Sam", "Bob", "Alice"];
$num = count($users); // длина массива 
for($i = 0; $i < $num; $i++)
{
	echo "$users[$i] <br />";
}

echo "<p>";
$users = 0;
$users = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
foreach($users as $element)
{
    echo "$element<br />";
}

echo "</p>";

$user = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
foreach($user as $key => $value)
{
	echo "$key - $value<br />";
}
?>