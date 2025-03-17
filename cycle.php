<?php
for ($i = 1; $i <= 10; $i++)
{
	echo "Квадрат числа $i равен " . $i *$i . "<br/>";
}

$i = 0;
for (; $i < 10;)
{
	echo $i;
	$i += 2;
}

echo "<br>";

for ($i = 1, $j = 1; $i+$j < 10; $i++, $j += 2)
{
	echo "$i + $j = " . $i + $j . "<br>";
}

for ($i = 1; $i < 10; $i++):
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
endfor;

$counter = 1;
while($counter<10)
{
	echo $counter * $counter . "<br/>";
	$counter++;
}

$counter = 1;
while($counter<10):
    echo $counter * $counter . "<br />";
    $counter++;
endwhile;

$counter = 1;
do
{
	echo $counter * $counter . "<br/>";
	$counter++;
}
while($counter<10);

for($i = 1; $i < 10; $i++)
{
	$result = $i * $i;
	if($result>80)
	{
		break;
	}
	echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}

for ($i = 1; $i < 10; $i++)
{
    if($i==5)
    {
        continue;
    }
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}
?>